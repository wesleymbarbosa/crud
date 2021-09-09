import AllDevs from './components/AllDevs.vue';
import AddDev from './components/AddDev.vue';
import EditDev from './components/EditDev.vue';

export const routes = [
    {
        name: 'home',
        path: '/',
        component: AllDevs
    },
    {
        name: 'add',
        path: '/add',
        component: AddDev
    },
    {
        name: 'edit',
        path: '/edit/:id',
        component: EditDev
    }
];