import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import userReg from '../views/userRegistration/userReg.vue'
import userLog from '../views/userLogin/userLogin.vue'
import test from '../views/Test/test.vue'
import userProfile from '../views/userProfile/userProfile.vue'
import bloodRequest from '../views/BloodRequest/bloodRequest.vue'
import otherRequested from '../views/RecfromOther/RFO.vue'
import accepted from '../views/Accepted/accepted.vue'
import viewPost from '../views/ViewPost/viewpost.vue'
import createTimeline from '../views/createTimeline/createTimeline.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: HomeView
    },
   
    {
      path: '/userRegistraion',
      name: 'userReg',
      component:userReg
    },

    {
      path: '/Login',
      name: 'userLogin',
      component:userLog
    },

    {
      path: '/test',
      name: 'test',
      component:test
    },
    {
      path: '/userProfile',
      name: 'userProfile',
      component:userProfile
    },
    {
      path: '/bloodRequest',
      name: 'bloodRequest',
      component:bloodRequest
    },
    {
      path: '/otherRequested',
      name: 'otherRequested',
      component:otherRequested
    },
     {
      path: '/accepted',
      name: 'accepted',
      component:accepted
    },
     
     {
      path: '/viewPost',
      name: 'viewPost',
      component:viewPost
    },
      {
      path: '/createTimeline',
      name: 'createTimeline',
      component:createTimeline
    },
  ]
})

export default router
