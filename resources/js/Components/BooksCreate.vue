<template>
  <v-form v-on:submit.prevent="formSubmit">
    <v-container>
      <v-row>
        <v-col cols="12" md="3">
          <v-text-field v-model="book.title" label="Title" required></v-text-field>
          <ErrorMessage v-if="message.title" :error="message.title"></ErrorMessage>
        </v-col>

        <v-col cols="12" md="3">
          <v-textarea
            v-model="book.description"
            label="Description"
            variant="solo-filled"
          ></v-textarea>
          <ErrorMessage
            v-if="message.description"
            :error="message.description"
          ></ErrorMessage>
        </v-col>

        <v-col cols="12" md="3">
          <v-text-field
            v-model="book.quantity"
            label="Quantity"
            type="number"
            required
          ></v-text-field>
          <ErrorMessage v-if="message.quantity" :error="message.quantity"></ErrorMessage>
        </v-col>
        <v-col cols="12" md="3">
          <v-text-field
            v-model="book.price"
            label="Price"
            type="number"
            required
          ></v-text-field>
          <ErrorMessage v-if="message.price" :error="message.price"></ErrorMessage>
        </v-col>
      </v-row>
      <v-row>
        <v-col col="12" md="6">
          <v-select
            v-model="book.author_id"
            label="Author ID"
            :items="['1', '2', '3', '4', '5', '6']"
            variant="underlined"
          ></v-select>
          <ErrorMessage
            v-if="message.author_id"
            :error="message.author_id"
          ></ErrorMessage>
        </v-col>
        <v-col md="4">
          <v-file-input
            accept="image/png, image/jpeg, image/bmp"
            placeholder="Pick an avatar"
            prepend-icon="mdi-camera"
            label="image"
            @change="onFileChange"
          ></v-file-input>
          <ErrorMessage v-if="message.image" :error="message.image"></ErrorMessage>
        </v-col>

        <v-col col="12" md="2">
          <v-btn type="submit" variant="outlined"> Button </v-btn>
        </v-col>
      </v-row>
    </v-container>
  </v-form>
</template>

<script>
import { useVuelidate } from "@vuelidate/core";
import { required, email, maxLength } from "@vuelidate/validators";
import { reactive, ref } from "vue";
import intus from "intus";
import { isRequired, isEmail } from "intus/rules";
import ErrorMessage from "./Reuseable/ErrorMessage.vue";

export default {
  components: {
    ErrorMessage,
  },
  setup() {
    let message = ref({});
    const book = ref({
      title: "",
      description: "",
      author_id: "",
      quantity: "",
      price: "",
      image: "",
    });

    let formSubmit = () => {
      console.log("inside form submit ");
      const validation = intus.validate(book.value, {
        title: [isRequired()],
        description: [isRequired()],
        author_id: [isRequired()],
        quantity: [isRequired()],
        price: [isRequired()],
        image: [isRequired()],
      });
      if (validation.passes()) {
        let formData = new FormData();

        formData.append("title", book.value.title);
        formData.append("description", book.value.description);
        formData.append("author_id", book.value.author_id);
        formData.append("quantity", book.value.quantity);
        formData.append("price", book.value.price);
        formData.append("image", book.value.image);

        console.log(formData);
        axios
          .post("/api/bookCreate", formData)
          .then((res) => {
            console.log(res);
          })
          .catch((error) => {
            console.log(error);
          });
      } else {
        message.value = validation.errors();
      }
      console.log(message.value);
    };

    let onFileChange = function (event) {
      console.log(event);
      book.value.image = event.target.files[0];
      console.log(book.value.image);

    };
    return { book, formSubmit, message, onFileChange };
  },
};
</script>
