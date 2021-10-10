require('./bootstrap')

import DataTable from 'laravel-vue-datatable';

window.Vue = require('vue').default;

window.Vue.use(DataTable);
window.Vue.component(
    'challenge30',
    require('./components/Challenge30.vue').default
);

const app = new window.Vue({
    el: '#app',
});
