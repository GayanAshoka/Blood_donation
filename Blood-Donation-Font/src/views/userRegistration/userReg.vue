<template>
  <form ref="form">
    <section>
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col">
            <div class="card card-registration my-4">
              <div class="row g-0">
                <div class="col-xl-12">
                  <div class="card-body p-md-5 text-black">
                    <h3>User registration form</h3>

                    <div class="row">
                      <div class="col-md-4 mb-4">
                        <div class="form-outline">
                          <input
                            v-model="user.fname"
                            autocomplete="off"
                            type="text"
                            id="fname"
                            class="form-control form-control-lg"
                          />
                          <label class="form-label" for="form3Example1m"
                            >First name</label
                          >
                        </div>
                      </div>
                      <div class="col-md-4 mb-4">
                        <div class="form-outline">
                          <input
                            v-model="user.lname"
                            autocomplete="off"
                            type="text"
                            id="last_name"
                            class="form-control form-control-lg"
                          />
                          <label class="form-label" for="form3Example1n"
                            >Last name</label
                          >
                        </div>
                      </div>

                      <div class="col-md-4 mb-4">
                        <div class="form-outline">
                          <input
                            v-model="user.age"
                            type="text"
                            id="age"
                            class="form-control form-control-lg"
                          />
                          <label class="form-label" for="age">age</label>
                        </div>
                      </div>
                    </div>

                    <div class="form-outline mb-4">
                      <div class="form-outline">
                        <input
                          v-model="user.address"
                          type="text"
                          id="address"
                          class="form-control form-control-lg"
                        />
                        <label class="form-label" for="address">address</label>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-3 mb-4">
                        <div class="form-outline">
                          <input
                            v-model="user.postalcode"
                            type="text"
                            id="postelCode"
                            class="form-control form-control-lg"
                          />
                          <label class="form-label" for="school"
                            >postelCode</label
                          >
                        </div>
                      </div>

                      <div class="col-md-3 mb-4">
                        <div class="form-outline">
                          <input
                            v-model="user.city"
                            type="text"
                            id="city"
                            class="form-control form-control-lg"
                          />
                          <label class="form-label" for="email">city</label>
                        </div>
                      </div>

                      <div class="col-md-3 mb-4">
                        <div class="form-outline">
                          <input
                            v-model="user.province"
                            type="text"
                            id="province"
                            class="form-control form-control-lg"
                          />
                          <label class="form-label" for="province"
                            >province</label
                          >
                        </div>
                      </div>

                      <div class="col-md-3 mb-4">
                        <div class="form-outline">
                          <input
                            v-model="user.district"
                            type="text"
                            id="district"
                            class="form-control form-control-lg"
                          />
                          <label class="form-label" for="district"
                            >district</label
                          >
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-3 mb-4">
                        <div class="form-outline">
                          <input
                            v-model="user.contactno"
                            type="text"
                            id="mobNumber"
                            class="form-control form-control-lg"
                          />
                          <label class="form-label" for="mobNumber"
                            >Contact Number</label
                          >
                        </div>
                      </div>

                      <div class="col-md-3 mb-4">
                        <div class="form-outline">
                          <div
                            class="d-md-flex justify-content-start align-items-center mb-4 py-2"
                          >
                            <h6 class="mb-0 me-4">Gender:</h6>

                            <div class="form-check form-check-inline mb-0 me-4">
                              <input
                                v-model="user.gender"
                                class="form-check-input"
                                type="radio"
                                name="inlineRadioOptions"
                                id="maleGender"
                                value="Male"
                                selected
                              />
                              <label class="form-check-label" for="maleGender"
                                >Male</label
                              >
                            </div>

                            <div class="form-check form-check-inline mb-0 me-4">
                              <input
                                v-model="user.gender"
                                class="form-check-input"
                                type="radio"
                                name="inlineRadioOptions"
                                id="femaleGender"
                                value="Female"
                              />
                              <label class="form-check-label" for="femaleGender"
                                >Female</label
                              >
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-3 mb-4">
                        <div class="form-outline">
                          <input
                            v-model="user.disies"
                            type="text"
                            id="mobNumber"
                            class="form-control form-control-lg"
                          />
                          <label class="form-label" for="mobNumber"
                            >Disies</label
                          >
                        </div>
                      </div>

                      <div class="col-md-3 mb-4">
                        <div class="form-outline">
                          <input
                            v-model="user.alreadydonated"
                            type="text"
                            id="mobNumber"
                            class="form-control form-control-lg"
                          />
                          <label class="form-label" for="mobNumber"
                            >Already Dontaded?</label
                          >
                        </div>
                      </div>
                    </div>

                    <div class="col-md-3 mb-4">
                      <div class="form-outline">
                        <div
                          class="d-md-flex justify-content-start align-items-center mb-4 py-2"
                        >
                          <h6 class="mb-0 me-4">Blood Type:</h6>

                          <div class="form-check form-check-inline mb-0 me-4">
                            <input
                              v-model="user.bloodtype"
                              class="form-check-input"
                              type="radio"
                              name="inlineRadioOptions2"
                              id="O-"
                              value="O-"
                              selected
                            />
                            <label class="form-check-label" for="maleGender"
                              >O-</label
                            >
                          </div>

                          <div class="form-check form-check-inline mb-0 me-4">
                            <input
                              v-model="user.bloodtype"
                              class="form-check-input"
                              type="radio"
                              name="inlineRadioOptions2"
                              id="O+"
                              value="O+"
                            />
                            <label class="form-check-label" for="femaleGender"
                              >O+</label
                            >
                          </div>

                          <div class="form-check form-check-inline mb-0 me-4">
                            <input
                              v-model="user.bloodtype"
                              class="form-check-input"
                              type="radio"
                              name="inlineRadioOptions2"
                              id="B-"
                              value="B-"
                              selected
                            />
                            <label class="form-check-label" for="maleGender"
                              >B-</label
                            >
                          </div>

                          <div class="form-check form-check-inline mb-0 me-4">
                            <input
                              v-model="user.bloodtype"
                              class="form-check-input"
                              type="radio"
                              name="inlineRadioOptions2"
                              id="B+"
                              value="Female"
                            />
                            <label class="form-check-label" for="B+">B+</label>
                          </div>

                          <div class="form-check form-check-inline mb-0 me-4">
                            <input
                              v-model="user.bloodtype"
                              class="form-check-input"
                              type="radio"
                              name="inlineRadioOptions2"
                              id="A-"
                              value="A-"
                            />
                            <label class="form-check-label" for="femaleGender"
                              >A-</label
                            >
                          </div>

                          <div class="form-check form-check-inline mb-0 me-4">
                            <input
                              v-model="user.bloodtype"
                              class="form-check-input"
                              type="radio"
                              name="inlineRadioOptions2"
                              id="A+"
                              value="A+"
                            />
                            <label class="form-check-label" for="femaleGender"
                              >A+</label
                            >
                          </div>

                          <div class="form-check form-check-inline mb-0 me-4">
                            <input
                              v-model="user.bloodtype"
                              class="form-check-input"
                              type="radio"
                              name="inlineRadioOptions2"
                              id="AB-"
                              value="AB-"
                            />
                            <label class="form-check-label" for="femaleGender"
                              >AB-</label
                            >
                          </div>

                          <div class="form-check form-check-inline mb-0 me-4">
                            <input
                              v-model="user.bloodtype"
                              class="form-check-input"
                              type="radio"
                              name="inlineRadioOptions2"
                              id="AB+"
                              value="AB+"
                            />
                            <label class="form-check-label" for="femaleGender"
                              >AB+</label
                            >
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-2 mb-4">
                        <div class="form-outline">
                          <input
                            v-model="user.weight"
                            type="email"
                            id="email"
                            class="form-control form-control-lg"
                          />
                          <label class="form-label" for="email">Weight</label>
                        </div>
                      </div>

                      <div class="col-md-2 mb-4">
                        <div class="form-outline">
                          <input
                            v-model="user.height"
                            type="text"
                            id="empNo"
                            class="form-control form-control-lg"
                          />
                          <label class="form-label" for="empNo">Height</label>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6 mb-4">
                        <div class="form-outline">
                          <input
                            v-model="user.email"
                            type="email"
                            id="email"
                            class="form-control form-control-lg"
                          />
                          <label class="form-label" for="email">Email</label>
                        </div>
                      </div>
                    </div>

                    <div class="form-outline mb-4"></div>

                    <div class="form-outline mb-4"></div>

                    <div class="form-outline mb-4">
                      <input
                        v-model="user.password"
                        type="password"
                        id="password"
                        class="form-control form-control-lg"
                      />
                      <label class="form-label" for="password"
                        >New Password</label
                      >
                    </div>
                    <div class="d-flex justify-content-end pt-3">
                      <button
                        type="button"
                        class="btn btn-light btn-lg"
                        @click="clear()"
                      >
                        Reset all
                      </button>
                      <button
                        @click="save()"
                        type="button"
                        class="btn btn-warning btn-lg ms-2"
                      >
                        Submit form
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </form>
</template>

<style scoped>
.card-registration .select-input.form-control[readonly]:not([disabled]) {
  font-size: 1rem;
  line-height: 2.15;
  padding-left: 0.75em;
  padding-right: 0.75em;
}
.card-registration .select-arrow {
  top: 13px;
}
.card {
  border-radius: 20px;
  background-color: rgba(0, 0, 0, 0.114);
  backdrop-filter: blur(25px);
}

section {
  background-image: url("@/assets/regwall.jpg");
  background-position: center;
  background-repeat: no-repeat;
  background: cover;
  background-size: cover;
  background-attachment: fixed;
}

h3 {
  color: rgba(253, 253, 253, 0.84);
  font-size: 3em;
  text-align: center;
  padding-bottom: 10px;
}
</style>

<script>
import axios from "axios";
export default {
  data() {
    return {
      user: {
        fname: "",
        lname: "",
        age: "",
        gender: "",
        bloodtype: "",
        alreadydonated: "",
        disies: "",
        postalcode: "",
        city: "",
        district: "",
        province: "",
        height: "",
        weight: "",
        address: "",
        contactno: "",
        email: "",
        password: "",
      },
    };
  },

  methods: {
    save() {
      axios

        .post("http://127.0.0.1:8000/api/user", this.user)
        .then((response) => {
          if (response.status == 200) {
            alert(response.data.message);
            this.$refs.form.reset();
          }
        })
        .catch((error) => {
          console.log(error);
        });
    },

    clear() {

      this.$refs.form.reset();
      
    },
  },
};
</script>
