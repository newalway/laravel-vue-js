<template>
  <div >
    <div class="container">
    <table class="table table-striped">
      <th>Id</th>
      <th>Name</th>
      <th>Email</th>
      <th>Edit</th>
      <th>Delete</th>
      <tr v-for="(user,index) in users">
        <td>{{user.id}}</td>
        <td>{{user.name}}</td>
        <td>{{user.email}}</td>
        <td><a :href="'/users/' + user.id + '/edit'"><button class="btn btn-warning">edit</button></a></td>
          <td><a href="#" v-on:click = "deleteUser(user.id,index)"><button class="btn btn-danger">delete</button></a></td>
      </tr>
    </table>
<a href="/users/create"><button class="btn btn-primary">Create</button></a>
    </div>
  </div>


</template>

<script type="text/javascript">
export default{
    mounted(){
      this.getUserData();
    },
    methods:{
        getUserData(){
            axios.get('api/users').then(response=>{
              // console.log(response);
            this.users = response.data;
            });
        },
        deleteUser(id,index){
          if(confirm("Do you really want to delete?")){
            axios.delete('api/users/'+id).then(response=>{
              //console.log(response);
              this.users.splice(index,1);//update when delete 
            // this.users = response.data;
            });
          }

        }
    },
    data(){
      return{
        users:[],
        user:{
          id:0,
          name:'',
          email:'',

        }
      }
    }
}

</script>
