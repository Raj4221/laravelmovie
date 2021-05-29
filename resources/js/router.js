import Vue from "vue";
import Router from "vue-router";

Vue.use(Router);

export default new Router({
    routes: [
    {
      path: "/book/:id",
      name: "book-with-id",
      component: () => import("./components/BookComponent.vue"),
    },
    {
      path: "/account/:id/todo/:todoId",
      name: "account-with-id",
      component: () => import("./components/MovieComponent.vue"),

    },]
});