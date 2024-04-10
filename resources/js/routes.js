import { createWebHistory, createRouter } from "vue-router";
import test from "../views/test.vue";
import PageNotFound from "../views/PageNotFound.vue";
import Auth from "../views/Auth.vue";

const routes = [
    {
        name: "test",
        path: "/test",
        component: test,
    },
    {
        path: "/",
        name: "Auth",
        component: Auth,
    },
    {
        path: "/:catchAll(.*)*",
        name: "PageNotFound",
        component: PageNotFound,
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
