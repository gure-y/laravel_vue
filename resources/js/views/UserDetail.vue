<template>
<div>
  <h1>USER DETAIL</h1>
  <ul>
    <li>USER ID: {{ user.id }}</li>
    <li>USER NAME: {{ user.name }}</li>
    <li>USER EMAIL: {{ user.email }}</li>
  </ul>
</div>
</template>

<script>
  export default {
    data() {
      return {
        id: this.$route.params.id,
        user: ''
      }
    },
    created(){
      axios.get('/api/user/' + this.id)
      .then(response => this.user = response.data.user)
      .catch(error => console.log(error));
    }
  }
</script>