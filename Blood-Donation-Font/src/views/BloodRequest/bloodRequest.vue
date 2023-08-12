<template>
  <!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Untitled</title>
      <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css"
      />
      <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
      />
      <link rel="stylesheet" href="assets/css/style.css" />
    </head>

    <body>
      <div class="team-boxed">
        <div class="container">
          <div class="intro">
            <h2 class="text-center">Make a Request</h2>
            <p class="text-center">
              Only direct request to people who are most important to you
            </p>
          </div>
          <div class="row people">
            <div
              class="col-md-6 col-lg-4 item"
              v-for="values in user_data"
              :key="values.id"
            >
              <div class="box">
                <img class="rounded-circle" src="@/assets/df.jpg" />
                <h3 class="name">{{ values.fname }} {{ values.lname }}</h3>
                <h4 class="title">
                  Blood Type
                  <h3>{{ values.bloodtype }}</h3>
                </h4>
                <p class="description">Address: {{ values.address }}</p>
                <p class="description">contact no:{{ values.contactno }}</p>
                <p class="description">email: {{ values.email }}</p>
                <p class="description">any disises: {{ values.disies }}</p>
                <p class="description">
                  Alredy given: {{ values.alreadydonated }}
                </p>
                <button class="btn btn-primary" @click="save(values)">
                  Request
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </body>
  </html>
</template>
<style>
.team-boxed {
  color: #313437;
  background-color: #eef4f7;
}

.team-boxed p {
  color: #7d8285;
}

.team-boxed h2 {
  font-weight: bold;
  margin-bottom: 40px;
  padding-top: 40px;
  color: inherit;
}

@media (max-width: 767px) {
  .team-boxed h2 {
    margin-bottom: 25px;
    padding-top: 25px;
    font-size: 24px;
  }
}

.team-boxed .intro {
  font-size: 16px;
  max-width: 500px;
  margin: 0 auto;
}

.team-boxed .intro p {
  margin-bottom: 0;
}

.team-boxed .people {
  padding: 50px 0;
}

.team-boxed .item {
  text-align: center;
}

.team-boxed .item .box {
  text-align: center;
  padding: 30px;
  background-color: #fff;
  margin-bottom: 30px;
}

.team-boxed .item .name {
  font-weight: bold;
  margin-top: 28px;
  margin-bottom: 8px;
  color: inherit;
}

.team-boxed .item .title {
  text-transform: uppercase;
  font-weight: bold;
  color: #d0d0d0;
  letter-spacing: 2px;
  font-size: 13px;
}

.team-boxed .item .description {
  font-size: 15px;
  margin-top: 15px;
  margin-bottom: 20px;
}

.team-boxed .item img {
  max-width: 160px;
}

.team-boxed .social {
  font-size: 18px;
  color: #a2a8ae;
}

.team-boxed .social a {
  color: inherit;
  margin: 0 10px;
  display: inline-block;
  opacity: 0.7;
}

.team-boxed .social a:hover {
  opacity: 1;
}
</style>

<script>
import axios from "axios";

export default {
  data() {
    return {
      user_data: [],

      bloodrequest: {
        Requester_id: "",
        Request_get_id: "",
        Requester_name: "",
        Requester_mail: "",
        Request_getter_name: "",
        Request_getter_mail: "",
      },
    };
  },

  created() {
    this.get_User_Data();

    let user = localStorage.getItem("userDetails");
    user = JSON.parse(user);
    this.bloodrequest.Requester_id = user.id;
    this.bloodrequest.Requester_name = user.fname;
    this.bloodrequest.Requester_mail = user.email;
  },

  methods: {
    get_User_Data() {
      axios
        .get("http://127.0.0.1:8000/api/user_for_blood_request")
        .then((response) => {
          if (response.status == "200") {
            this.user_data = response.data.user_data;
          }
        })
        .catch((error) => {
          console.log(error);
        });
    },

    save(values) {
      if (values) {
        this.bloodrequest.Request_get_id = values.id;
        this.bloodrequest.Request_getter_name = values.fname;
        this.bloodrequest.Request_getter_mail = values.email;
      }

      axios
        .post("http://127.0.0.1:8000/api/blood_request", this.bloodrequest)
        .then((response) => {
          if (response.status == "200") {
            alert(response.data.message);
          }
        })
        .catch((error) => {
          console.log(error);
        });
    },
  },
};
</script>
