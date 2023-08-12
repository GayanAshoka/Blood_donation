<template>
  <h1 class="h1">Accepted</h1>
  <p class="lets">Let's meetup</p>
  <div class="card cs">
    <div class="card-body">
      <table class="table align-middle mb-0 bg-white">
        <thead class="bg-light">
          <tr>
            <th>Acptr Name</th>
            <th>Acptr Blood Type</th>
            <th>Acptr address</th>
            <th>Acptr contact no</th>
            <th>Acptr age</th>
            <th>Acptr gender</th>
            <th>Accept confirm date</th>
            <th>respond</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="values in acceptedDetails" :key="values.id">
            <td>
              <div class="d-flex align-items-center">
                <img
                  src="https://mdbootstrap.com/img/new/avatars/8.jpg"
                  alt=""
                  style="width: 45px; height: 45px"
                  class="rounded-circle"
                />
                <div class="ms-3">
                  <p class="fw-bold mb-1">{{ values.Accepter_name }}</p>
                  <p class="text-muted mb-0">{{ values.email }}</p>
                </div>
              </div>
            </td>
            <td>
              <p class="fw-normal mb-1">{{ values.Accepter_blood_type }}</p>
            </td>
            <td>{{ values.Accepter_address }}</td>
            <td>{{ values.Accepter_contact }}</td>
            <td>{{ values.Accepter_age }}</td>
            <td>{{ values.Accepter_gender }}</td>
            <td>{{ values.created_at }}</td>
            <td>
              <button type="button" class="btn btn-link btn-sm btn-rounded">
                Meetup
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
        currentLocalId: "",
      },

      acceptedDetails: [],
    };
  },

  methods: {},

  mounted() {
    let user = localStorage.getItem("userDetails");
    user = JSON.parse(user);
    this.form.currentLocalId = user.id;

    axios
      .post("http://127.0.0.1:8000/api/accepted", this.form)
      .then((response) => {
        if (response.status == "200") {
          this.acceptedDetails = response.data.data;
        }
      })

      .catch((error) => {
        console.log(error);
      });
  },
};
</script>
<style>
.card {
  box-shadow: 0px 0px 15px rgb(15, 105, 188);
}

.h1 {
  text-align: center;
  padding-top: 2vh;
  padding-bottom: 0vh;
}

.cs {
}

.lets {
  text-align: center;
  padding-bottom: 4vh;
}
</style>
