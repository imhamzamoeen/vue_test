<template>
<h1>Hello from books component </h1>
<table class="table table-dark" v-if="books.length>0">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Author</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    <tr v-for="book in books" :key="book.id">
        <td > {{ book.id }}</td>
        <td > {{ book.title }}</td>

        <td > {{ book.description }}</td>
        <td > {{ book.price }}</td>

        <td > {{ book.quantity }}</td>
        <td > {{ book.author.name }}</td>
        <td><v-btn variant="plain" @click="deleteBook(book.id)">
  Button
</v-btn></td>

    </tr>
  </tbody>
</table>
</template>
<script >
import { ref, watch, computed } from "vue";
import { onMounted } from "vue";
import bookComposeable from '@/Composeable/booksComposeable.js';
export default {
    name:"BooksComponent",

    setup(){
    const { books,getAllBooks,delbook} = bookComposeable();
    onMounted(() => {

      console.log(books.value);
      getAllBooks();
      console.log(books.value);

    })

    async  function  deleteBook(book_id){
        console.log(book_id);
       await delbook(book_id);
       await getAllBooks();
    }

    return {
        getAllBooks,
        books,
        deleteBook,
    }
    }
}
</script>


