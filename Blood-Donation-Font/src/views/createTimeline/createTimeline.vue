<template scoped>
  <body>
    <header>
      <div class="overlay">
        <h1>Create post</h1>
        <h3>Give some update for us</h3>

        <br />
      </div>
    </header>

    <div class="container">
      <div class="row justify-content-center pt-4">
        <div class="col-md-11">
          <div class="card cb1 text-white">
            <div class="card-body">
              <div
                v-if="success != ''"
                class="alert alert-success"
                role="alert"
              >
                {{ success }}
              </div>

              <form @submit="formSubmit" enctype="multipart/form-data" >
                <strong class="texts">Title:</strong>
                <input type="text" class="form-control" v-model="title" />

                <strong class="texts">Description:</strong>
                <textarea rows="4" class="form-control" v-model="description" />
                <strong class="texts">Image:</strong>

                <input
                  type="file"
                  class="form-control"
                  v-on:change="onImageChange"
                  ref="fileInput"
                  @input="pickFile"
                />

                <!-- display image -->

                <div class="hello"></div>

                <div class="button">
                  <input type="submit" class="btn btn-success" />
                </div>

                <div
                  class="imagePreviewWrapper"
                  :style="{ 'background-image':`url(${previewImage})`}"
                  @click="selectImage"
                ></div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</template>

<script>
import axios from "axios";
export default {
  mounted() {
    console.log("Component mounted.");

    let user = localStorage.getItem("userDetails");
    user = JSON.parse(user);
    this.form.userId = user.id;
  },

  data() {
    return {
      form: {
        userId: "",
      },


      title: "",
      description: "",
      image: "",
      success: "",
      previewImage: null,
    };
  },
  methods: {
    onImageChange(e) {
      console.log(e.target.files[0]);
      this.image = e.target.files[0];
    },
    formSubmit(e) {
      e.preventDefault();
      let currentObj = this;

      const config = {
        headers: { "content-type": "multipart/form-data" },
      };

      let formData = new FormData();
      formData.append("image", this.image);
      formData.append("description", this.description);
      formData.append("title", this.title);
      formData.append("userId", this.form.userId);

      // alert("ok");
      axios
        .post("http://127.0.0.1:8000/api/post", formData, config)
        .then(function (response) {
          currentObj.success = response.data.message;
          alert("Image save successfully");
        })
        .catch(function (error) {
          currentObj.output = error;
        });
    },

    selectImage() {
      this.$refs.fileInput.click();
    },
    pickFile() {
      let input = this.$refs.fileInput;
      let file = input.files;
      if (file && file[0]) {
        let reader = new FileReader();
        reader.onload = (e) => {
          this.previewImage = e.target.result;
        };
        reader.readAsDataURL(file[0]);
        this.$emit("input", file[0]);
      }
    },
  },
};
</script>

<style scoped>
.imagePreviewWrapper {
  padding: 150px;
  width: 500px;
  height: 150px;
  display: block;
  cursor: pointer;
  margin: 12 auto 30px;

  background-size: cover;
}
.button {
  margin-left: 90%;
  margin-top: 5%;
}

.td {
  color: aliceblue;
  padding-left: 0%;
  text-align: center;
}
.dc {
  color: azure;
  text-align: center;
}
.textt {
  text-align: center;
  color: rgb(255, 255, 255);
}

.containers {
  font-family: arial;

  width: 350px;
  height: 2000px;

  /* Setup */
  position: relative;
}

.childs {
  width: 1600px;
  height: 90px;
  /* Center vertically and horizontally */
  position: absolute;

  left: 10%;
  transform: translate(+1%, +50%);
}

* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
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
  padding: 5px;
  color: #ffffff;
  text-shadow: 1px 1px 1px #ffffff;
  background-image: linear-gradient(135deg, #040cffe7 10%, #08fdf1bd 100%);
}

h1 {
  font-family: "Dancing Script", cursive;
  font-size: 80px;
  margin-bottom: 30px;
}

h3,
p {
  font-family: "Open Sans", sans-serif;
  margin-bottom: 30px;
}

button:hover {
  cursor: pointer;
  background: linear-gradient(135deg, #040cffe7 10%, #08fdf1bd 100%);
  color: black;
}

.card {
  border-radius: 1rem;
  border: 1px solid transparent;

  backdrop-filter: blur(1rem);
  

  border-top-color: rgba(255, 255, 255, 0.5);
  border-top-color: rgba(255, 255, 255, 0.5);
  border-top-color: rgba(255, 255, 255, 0.1);
  border-top-color: rgba(255, 255, 255, 0.1);
}
.cb1 {
  background-color: rgb(255, 255, 255, 0.1);
}

body {
}

.container {
  align-items: center;
  justify-content: center;
}

.texts{
    color:black;
    padding:2vh;
}
</style>
