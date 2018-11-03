
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import VueRouter from 'vue-router';

window.Vue.use(VueRouter);

import PostsIndex from './components/posts/PostsIndex.vue';
import PostsCreate from './components/posts/PostsCreate.vue';
import PostsEdit from './components/posts/PostsEdit.vue';

const routes = [
    {
        path: '/',
        components: {
            postsIndex: PostsIndex
        }
    },
    {path: '/admin/posts/create', component: PostsCreate, name: 'createPost'},
    {path: '/admin/posts/edit/:id', component: PostsEdit, name: 'editPost'},
]

const router = new VueRouter({ routes })

const app = new Vue({ router }).$mount('#app')
