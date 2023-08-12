<template>
  <div class="card es">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.css"
      integrity="sha256-NAxhqDvtY0l4xn+YVa6WjAcmd94NNfttjNsDmNatFVc="
      crossorigin="anonymous"
    />

    <div class="container">
      <div class="row">
        <div class="col-xl-5">
          <div class="card">
            <div class="card-body">
              <div class="dropdown float-end">
                <a
                  href="#"
                  class="dropdown-toggle arrow-none card-drop"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  <i class="mdi mdi-dots-vertical"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                  <!-- item-->
                  <a href="javascript:void(0);" class="dropdown-item">Edit</a>
                  <!-- item-->
                  <a href="javascript:void(0);" class="dropdown-item">Delete</a>
                  <!-- item-->
                  <a href="javascript:void(0);" class="dropdown-item">Block</a>
                </div>
              </div>
              <div class="d-flex align-items-start">
                <img
                  src="https://bootdey.com/img/Content/avatar/avatar1.png"
                  class="rounded-circle avatar-lg img-thumbnail"
                  alt="profile-image"
                />
                <div class="w-100 ms-3">
                  <h4 class="my-0">{{ form.name }}</h4>
                  <p class="text-muted">@webdesigner</p>
                  <button
                    type="button"
                    class="btn btn-soft-primary btn-xs waves-effect mb-2 waves-light"
                  >
                    Follow
                  </button>
                  <button
                    type="button"
                    class="btn btn-soft-success btn-xs waves-effect mb-2 waves-light"
                  >
                    Message
                  </button>
                </div>
              </div>

              <div class="mt-3">
                <h4 class="font-13 text-uppercase">About Me :</h4>
                <p class="text-muted font-13 mb-3">
                  Hi I'm Johnathn Deo,has been the industry's standard dummy
                  text ever since the 1500s, when an unknown printer took a
                  galley of type.
                </p>
                <p class="text-muted mb-2 font-13">
                  <strong>Full Name :</strong>
                  <span class="ms-2">{{ form.name }}</span>
                </p>

                <p class="text-muted mb-2 font-13">
                  <strong>Mobile :</strong
                  ><span class="ms-2">{{ form.contact }}</span>
                </p>

                <p class="text-muted mb-2 font-13">
                  <strong>Email :</strong>
                  <span class="ms-2">{{ form.email }}</span>
                </p>

                <p class="text-muted mb-1 font-13">
                  <strong>Location :</strong>
                  <span class="ms-2">{{ form.address }}</span>
                </p>
              </div>

              <ul class="social-list list-inline mt-3 mb-0">
                <li class="list-inline-item">
                  <a
                    href="javascript: void(0);"
                    class="social-list-item text-center border-primary text-primary"
                    ><i class="mdi mdi-facebook"></i
                  ></a>
                </li>
                <li class="list-inline-item">
                  <a
                    href="javascript: void(0);"
                    class="social-list-item text-center border-danger text-danger"
                    ><i class="mdi mdi-google"></i
                  ></a>
                </li>
                <li class="list-inline-item">
                  <a
                    href="javascript: void(0);"
                    class="social-list-item text-center border-info text-info"
                    ><i class="mdi mdi-twitter"></i
                  ></a>
                </li>
                <li class="list-inline-item">
                  <a
                    href="javascript: void(0);"
                    class="social-list-item text-center border-secondary text-secondary"
                    ><i class="mdi mdi-github"></i
                  ></a>
                </li>
              </ul>
            </div>
          </div>
          <!-- end card -->

          <div class="card">
            <div class="card-body text-center">
              <div class="row">
                <div class="col-4 border-end border-light">
                  <h5 class="text-muted mt-1 mb-2 fw-normal">Accepted</h5>
                  <h2 class="mb-0 fw-bold">{{acceptcount}}</h2>
                </div>
                <div class="col-4 border-end border-light">
                  <h5 class="text-muted mt-1 mb-2 fw-normal">Request</h5>
                  <h2 class="mb-0 fw-bold">{{requestcount}}</h2>
                </div>
                <div class="col-4">
                  <h5 class="text-muted mt-1 mb-2 fw-normal">Remain</h5>
                  <h2 class="mb-0 fw-bold">{{remainrequest}}</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end col-->

        <div class="col-xl-7">
          <div class="card">
            <div class="card-body">
              <h4 class="header-title mb-3">
                Accepter <i class="mdi mdi-account-multiple ms-1"></i>
              </h4>

              <div
                class="list-group"
                v-for="values in acceptedDetails"
                :key="values.id"
              >
                <a href="#" class="list-group-item list-group-item-action">
                  <div
                    class="d-flex align-items-center pb-1"
                    id="tooltips-container"
                  >
                    <img
                      src="https://bootdey.com/img/Content/avatar/avatar5.png"
                      class="rounded-circle img-fluid avatar-md img-thumbnail bg-transparent"
                      alt=""
                    />
                    <div class="w-100 ms-2">
                      <h5 class="mb-1">
                        {{ values.Accepter_name
                        }}<i class="mdi mdi-check-decagram text-info ms-1"></i>
                      </h5>
                      <p class="mb-0 font-13 text-muted">
                        Accepter mail: {{ values.email }}
                      </p>
                      <p class="mb-0 font-13 text-muted">
                        Accepted date: {{ values.created_at }}
                      </p>
                    </div>
                    <i class="mdi mdi-chevron-right h2"
                      >{{ values.Accepter_blood_type }}
                    </i>
                  </div>
                </a>
              </div>

              <div class="text-center">
                <a href="javascript:void(0);" class="text-danger"
                  ><i class="mdi mdi-spin mdi-loading me-1"></i> Load more
                </a>
              </div>

              <h4 class="header-title mb-3">
                Remain Request <i class="mdi mdi-account-multiple ms-1"></i>
              </h4>

              <div
                class="list-group"
                v-for="values in requesterdetail"
                :key="values.id"
              >
                <a
                  href="/otherRequested"
                  class="list-group-item list-group-item-action"
                >
                  <div
                    class="d-flex align-items-center pb-1"
                    id="tooltips-container"
                  >
                    <img
                      src="https://bootdey.com/img/Content/avatar/avatar5.png"
                      class="rounded-circle img-fluid avatar-md img-thumbnail bg-transparent"
                      alt=""
                    />
                    <div class="w-100 ms-2">
                      <h5 class="mb-1">
                        {{ values.Requester_name
                        }}<i class="mdi mdi-check-decagram text-info ms-1"></i>
                      </h5>
                      <p class="mb-0 font-13 text-muted">
                        {{ values.Requester_mail }}
                      </p>
                      <p class="mb-0 font-13 text-muted">
                        {{ values.created_at }}
                      </p>
                    </div>
                    <i class="mdi mdi-chevron-right h2">{{
                      values.bloodtype
                    }}</i>
                  </div>
                </a>
              </div>
              <div class="text-center">
                <a href="javascript:void(0);" class="text-danger"
                  ><i class="mdi mdi-spin mdi-loading me-1"></i> Load more
                </a>
              </div>
            </div>
          </div>
          <!-- end card-->
        </div>
        <!-- end col -->
      </div>
      <!-- end row-->
    </div>
  </div>
</template>
<script>
import axios from "axios";
export default {
  data() {
    return {
      form: {
        localid: "",
        userids: "",
        currentLocalId: "",
        id: "",
        name: "",
        email: "",
        address: "",
        contact: "",
      },
      acceptcount: "",
      requestcount: "",
      remainrequest:"",
      acceptedDetails: [],
      requesterdetail: [],
    };
  },

  created() {
    this.getLoggedUserDetails();
  },

  methods: {
    getLoggedUserDetails() {
      let user = localStorage.getItem("userDetails");
      user = JSON.parse(user);
      this.form.id = user.id;
      this.form.name = user.fname;
      this.form.email = user.email;
      this.form.address = user.address;
      this.form.contact = user.contactno;
    },
  },

  mounted() {
    let user = localStorage.getItem("userDetails");
    user = JSON.parse(user);
    this.form.currentLocalId = user.id;
    this.form.userids = user.id;
    this.form.localid = user.id;

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

      axios
      .post("http://127.0.0.1:8000/api/acceptedforhome", this.form)
      .then((response) => {
        if (response.status == "200") {
          this.acceptcount = response.data.data;
          this.requestcount = response.data.data2;
          this.remainrequest = response.data.data3;
        }
      })

      .catch((error) => {
        console.log(error);
      });

  },
};
</script>
<style>
body {
  background-color: #ecf2f5;
  margin-top: 20px;
}

.card {
  box-shadow: 0 0 2px 0 rgb(0 0 0 / 10%);
  margin-bottom: 24px;
}
.card {
  position: relative;
  display: flex;
  flex-direction: column;
  min-width: 0;
  word-wrap: break-word;
  background-color: #fff;
  background-clip: border-box;
  border: 0 solid #ecf2f5;
  border-radius: 0.25rem;
}
.avatar-lg {
  height: 4.5rem;
  width: 4.5rem;
}
.rounded-circle {
  border-radius: 50% !important;
}
.img-thumbnail {
  padding: 0.25rem;
  background-color: #ecf2f5;
  border: 1px solid #dee2e6;
  border-radius: 0.25rem;
  max-width: 100%;
  height: auto;
}
.avatar-sm {
  height: 2.25rem;
  width: 2.25rem;
}
.rounded-circle {
  border-radius: 50% !important;
}
.me-2 {
  margin-right: 0.75rem !important;
}
.avatar-md {
  height: 3.5rem;
  width: 3.5rem;
}
.rounded-circle {
  border-radius: 50% !important;
}
.bg-transparent {
  --bs-bg-opacity: 1;
  background-color: transparent !important;
}
.post-user-comment-box {
  background-color: #f2f8fb;
  margin: 0 -0.75rem;
  padding: 1rem;
  margin-top: 20px;
}
.simplebar-wrapper {
  overflow: hidden;
  width: inherit;
  height: inherit;
  max-width: inherit;
  max-height: inherit;
}
.simplebar-height-auto-observer-wrapper {
  box-sizing: inherit !important;
  height: 100%;
  width: 100%;
  max-width: 1px;
  position: relative;
  float: left;
  max-height: 1px;
  overflow: hidden;
  z-index: -1;
  padding: 0;
  margin: 0;
  pointer-events: none;
  flex-grow: inherit;
  flex-shrink: 0;
  flex-basis: 0;
}
.font-13 {
  font-size: 13px !important;
}
.btn-soft-info {
  color: #45bbe0;
  background-color: rgba(69, 187, 224, 0.18);
  border-color: rgba(69, 187, 224, 0.12);
}
.social-list-item {
  height: 2rem;
  width: 2rem;
  line-height: calc(2rem - 2px);
  display: block;
  border: 2px solid #adb5bd;
  border-radius: 50%;
  color: #adb5bd;
}
.comment-area-box .comment-area-btn {
  background-color: #f2f8fb;
  padding: 10px;
  border: 1px solid #dee2e6;
  border-top: none;
  border-radius: 0 0 0.2rem 0.2rem;
}
.es {
  padding-top: 5vh;
}
</style>
