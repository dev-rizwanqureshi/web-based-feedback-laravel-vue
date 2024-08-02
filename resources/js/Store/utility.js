import { defineStore } from "pinia";
import { Modal } from "bootstrap";
import {router, usePage} from '@inertiajs/vue3'

export const utilityPinia = defineStore({
    id: 'utility',
    state: () => ({
        errorsLog:[],
        pageTitle:"Login",
        pagination:{
            current_page:1,
            total:0,
            from:0,
            to:0,
            per_page:10,
            last_page:1,
        },
        errorMessage:'',
        search:'',
    }),
    getters: {
    },
    actions: {

        async setPagination( pagination ) {

            //console.log("setPagination");
            this.pagination.current_page = pagination.current_page;
            this.pagination.last_page =pagination.last_page;
            this.pagination.total = pagination.total;
            this.pagination.from = pagination.from;
            this.pagination.to = pagination.to;
            this.pagination.per_page = pagination.per_page;


        },
        async showHideModal(idElement,ObjectID=0,type='') {

            console.log('showHideModal  idElement == ' + idElement);
            console.log('showHideModal  ObjectID == ' + ObjectID);
            console.log('showHideModal  type == ' + type);

            let myModalEl = document.getElementById(idElement);

            let options = {
                focus:true,

            };

            let myModal = Modal.getOrCreateInstance(myModalEl,options);
            myModal.toggle();

            myModalEl.addEventListener('hidden.bs.modal', event => {
                console.log("close modal");
            });

            myModalEl.addEventListener('show.bs.modal', event => {
                console.log("show modal");

            });
            this.errorsLog = [];

        },
        setActiveNavigationLink($componentName){

            console.log("setActiveNavigationLink",$componentName,usePage().component);
            return usePage().component === $componentName ? 'active':''
        },
        async onPageVisitsLink(url=''){

            console.log("onPageVisitsLink");
            console.log("onPageVisitsLink===",url);
            router.visit(url,{ method: 'get' });
        },
        onClickAddFeedback() {
            console.log('onClickAddFeedback');
            this.showHideModal('addFeedBack')
        },
    },
})
