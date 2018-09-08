import Vue from 'vue'
import Router from 'vue-router'
import MainPage from '@/components/MainPage'
import Registration from '@/components/Registration'


Vue.use(Router)



Vue.config.productionTip=false;


export default new Router({
  routes: [
    {
      path: '/',
      name: 'MainPage',
      component: MainPage
    },
      {
          path: '/registration',
          name: 'Registration',
          component: Registration
      }
  ]
})
