<template>
  <div class="card container">
    <h2>{{ specialH2 }}</h2><br>
    <h4 class="card-title">{{ title }}</h4>
    <p class="card-text">{{ description }}</p>
    <p class="card-text">{{ this.price }}</p>
  </div>
</template>

<script>
export default {
  name: "special-card",
  props: ['specialH2'],
  data() {
    return {
      info: null,
      specialH2: null,
      title: null,
      price: "$49.99"
    };
  },
  methods: {
    // setters, I set data
    setData() {
      console.log(this.info);
      this.title = this.getTitle;
      this.description = this.getDescription;
    }
  },
  mounted() {
    let self = this;
    axios
      .get('https://cors-anywhere.herokuapp.com/' + 'https://entree-f18.herokuapp.com/v1/menu/1')
      .then(response => {
        self.info = response.data;
        self.setData();
      });
  },
  computed: {
    // getters, I format and return data
    getTitle: function(){
      return this.info.menu_items[0].description.replace(/\"/g, "").split(' ').slice(0,2).join(' ');
    } ,
    getDescription: function(){
      return this.info.menu_items[0].description;
    } ,   
  }
};
</script>