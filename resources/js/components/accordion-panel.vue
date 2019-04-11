<template>

    <div class="card container">
        <div class="card-header" id="heading">
            <h5 class="mb-0">
                <button class="btn btn-link group" data-toggle="collapse" :data-target="getCollaspe"
                    aria-expanded="true" :aria-controls="getCollaspeID">
                    {{MenuValue}}
                </button>
            </h5>
        </div>

        <div :id="getCollaspeID" class="collapse" :aria-labelledby="getHeadingID" data-parent="#accordion">
        <!-- class="collapse show" defaults to the accordion being open-->
            <div class="card-body">

            <div v-for="n in 4" :key="n" class="row">
                <div class="col">
                    <p><special-card/></p>
                </div>
                <div class="col">
                    <p><special-card/></p>
                </div>
            </div>


            </div>
        </div>
    </div>
</template>


<script>
export default {
    name: "accordionPanel",
    props: ['MenuID', 'MenuValue'],    
    data() {
        return {
            
        };
    },
    methods: {
    },
    computed: {
        getCollaspe: function(){
            return "#collapse" + this.MenuID
        },
        getCollaspeID: function(){
            return "collapse" + this.MenuID
        },
        getHeadingID: function(){
            return "heading" + this.MenuID
        }        
    }

}
</script>