import axios from "axios";
import { ref } from "vue"

export default function  bookComposeable(){
    const books=ref([]);  //initializing as empty book

    const getAllBooks =async()=>{
        try{
        const response = await axios.get('/api/books'); // this only gets success response the failed response goes to catch
        console.log(response);
        console.log("ok");
        books.value=response.data.data;
        }catch(err){
            console.log(err);
        }
    }

    const delbook =async(id)=>{
        try{
           await axios({
                method: 'delete',
                url: `api/books/${id}`,
              })
                .then(function (response) {
                  console.log(response);
                }).catch(function (err) {
                    console.log(err);
                });
        }catch(error){
            console.log(error);
        }
    }

    const editbook = async(id)=>{
        try{
        }catch(error){
            console.log(error);
        }
    }

    const createBook = async(data)=>{
        try{
            await axios({
                 method: 'post',
                 url: `api/books`,
                 data:data
               })
                 .then(function (response) {
                   console.log(response);
                 }).catch(function (err) {
                     console.log(err);
                 });
         }catch(error){
             console.log(error);
         }
    }

    return {
        books,
        getAllBooks,
        delbook,
        createBook,
    }
}
