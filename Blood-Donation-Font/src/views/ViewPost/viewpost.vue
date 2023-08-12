<template scoped>
  <body>
  <nav class="bg-dark navbar-dark">
    <div class="container">
      <div class="text">
        <a href="" class="navbar-brand" style="color: gray; text-align: center"
          ><i class="fas fa-tree mr-2"></i>Learning area for all users</a
        >
      </div>
    </div>
  </nav>

  <header>
    <div class="overlay">
      <h1>Beautiful today</h1>
      <h3>Update your self </h3>
      <p>
        If you want create post's like this you can go to create post page
      </p>
      <br />
    </div>
  </header> 

  <section id="gallery">
    <div class="dc2 pt-5">
      <div class="container pt-3">
        <div class="row">
          <div class="col-lg-4" v-for="values in post_data" :key="values.id">
            
            <div class="card p-2">
              <img :src="values.image" alt="no image" class="card-img-top" />
              <div class="card-body">
                <h5 class="card-title name">{{ values.title }}</h5>
                <p class="card-text name">
                  {{ values.Description }}
                </p>
                <a href="" class="btn btn-outline-success btn-sm">Read More</a>
                <a href="" class="btn btn-outline-danger btn-sm"
                  ><i class="far fa-heart"></i
                ></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  </body>
</template>

<script>
import axios from "axios";
export default {
  data() {
    return {
      post_data: [],
    };
  },

  created() {
    this.get_post_data();
  },

  methods: {
    get_post_data() {
      axios
        .get("http://127.0.0.1:8000/api/viewpost")
        .then((response) => {
          if (response.status == 200) {
            this.post_data = response.data.data;
          }
        })

        .catch((error) => {
          console.log(error);
        });
    },
  },
};
</script>

<style scoped>
.text {
  color: black;
  font-family: "Accidental Presidency";
  padding-top: 1px;
  background-position: center;
  text-align: center;
}

.dc {
  text-align: center;
  color: rgb(239, 229, 229);
  padding-left: 0%;
}

.dc1 {
  padding-top: 0%;
}

.dc2 {
  padding-bottom: 0%;
  padding-top: 0%;
}

* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}
body {
  height: 900px;
}
header {
  background: url("http://www.autodatz.com/wp-content/uploads/2017/05/Old-Car-Wallpapers-Hd-36-with-Old-Car-Wallpapers-Hd.jpg");
  text-align: center;
  width: 100%;
  height: auto;
  background-size: cover;
  background-attachment: fixed;
  position: relative;
  overflow: hidden;
  border-radius: 0 0 85% 85% / 30%;
}
header .overlay {
  width: 100%;
  height: 100%;
  padding: 50px;
  color: #ffffff;
  text-shadow: 1px 1px 1px #ffffff;
  background: rgb(223, 252, 0);
background: linear-gradient(0deg, rgb(249, 245, 3) 0%, rgb(58, 215, 10) 100%);
}

h1 {
  font-family: "Dancing Script", cursive;
  font-size: 80px;
  margin-bottom: 3px;
}

h3,
p {
  font-family: "Open Sans", sans-serif;
  margin-bottom: 3px;
}

button {
  border: none;
  outline: none;
  padding: 10px 20px;
  border-radius: 50px;
  color: #333;
  background: #fff;
  margin-bottom: 50px;
  box-shadow: 0 3px 20px 0 #0000003b;
}

button:hover {
  cursor: pointer;
}


.card {  
  color:white;
  background-color: rgba(3, 3, 4, 0.1);
   border-radius:1rem;
  border:1px solid transparent;

  backdrop-filter: blur(1rem);
  box-shadow: 0.51rem 0.51rem 0.51rem rgba(0, 0, 0,0.3);
  
}

body{
 
}

.name{
  color:black;
}
</style>
