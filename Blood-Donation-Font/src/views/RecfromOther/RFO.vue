<template>
  <h1 class="h1">Stipulation</h1>
  <div class="card cs">
    <div class="card-body">
      <table class="table align-middle mb-0 bg-white">
        <thead class="bg-light">
          <tr>
            <th>Name</th>
            <th>Blood Type</th>
            <th>address</th>
            <th>contact no</th>
            <th>age</th>
            <th>gender</th>
            <th>requst made at</th>
            <th>respond</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="values in requesterdetail" :key="values.id">
            <td>
              <div class="d-flex align-items-center">
                <img
                  src="https://mdbootstrap.com/img/new/avatars/8.jpg"
                  alt=""
                  style="width: 45px; height: 45px"
                  class="rounded-circle"
                />
                <div class="ms-3">
                  <p class="fw-bold mb-1">{{ values.Requester_name }}</p>
                  <p class="text-muted mb-0">{{ values.Requester_mail }}</p>
                </div>
              </div>
            </td>
            <td>
              <p class="fw-normal mb-1">{{ values.bloodtype }}</p>
            </td>
            <td>{{ values.address }}</td>
            <td>{{ values.contactno }}</td>
            <td>{{ values.age }}</td>
            <td>{{ values.gender }}</td>
            <td>{{ values.created_at }}</td>
            <td>
              <button
                type="button"
                class="btn btn-link btn-sm btn-rounded"
                @click="confirm(values)"
              >
                Confirm
              </button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</template>

<script>
import axios from "axios";

export default {
  data() {
    return {
      form: {
        userids: "",

        Accepter_id: "",
        // Requester_id: "",
        // requestId: "",
        requester_name: "",
        requester_blood_type: "",
        requester_address: "",
        requester_contact: "",
        requester_age: "",
        requester_gender: "",
        requester_requestmade: "",
        Accepter_name: "",
        Accepter_blood_type: "",
        Accepter_address: "",
        Accepter_contact: "",
        Accepter_age: "",
        Accepter_gender: "",
      },

      details: {
        // Accepter_id: "",
        // Requester_id: "",
        // requestId: "",
        // requester_name: "",
        // requester_blood_type: "",
        // requester_address: "",
        // requester_contact: "",
        // requester_age: "",
        // requester_gender: "",
        // requester_requestmade: "",
        // Accepter_name: "",
        // Accepter_blood_type: "",
        // Accepter_address: "",
        // Accepter_contact: "",
        // Accepter_age: "",
        // Accepter_gender: "",
      },
      requesterdetail: [],
    };
  },

  mounted() {
    let user = localStorage.getItem("userDetails");
    user = JSON.parse(user);
    this.form.userids = user.id;

    this.form.Accepter_id = user.id;
    this.form.Accepter_name = user.fname;
    this.form.Accepter_blood_type = user.bloodtype;
    this.form.Accepter_address = user.address;
    this.form.Accepter_contact = user.contactno;
    this.form.Accepter_age = user.age;
    this.form.Accepter_gender = user.gender;

    axios
      .post("http://127.0.0.1:8000/api/requestFromOthers", this.form)
      .then((response) => {
        if (response.status == "200") {
          this.requesterdetail = response.data.data;
        }
      })
      .catch((error) => {
        console.log(error);
      });
  },

  methods: {
    confirm(values) {
      this.form.requester_name = values.Requester_name;
      this.form.requester_blood_type = values.bloodtype;
      this.form.requester_address = values.address;
      this.form.requester_contact = values.contactno;
      this.form.requester_age = values.age;
      this.form.requester_gender = values.gender;
      this.form.requester_requestmade = values.created_at;

      axios
        .post("http://127.0.0.1:8000/api/requestAccepted", this.form)
        .then((response) => {
          if ((response.status = "200")) {
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
<style>
.card {
  box-shadow: 0px 0px 15px rgb(15, 105, 188);
}

.h1 {
  text-align: center;
  padding-bottom: 4vh;
  padding-top: 2vh;
}

.cs {
}
</style>
