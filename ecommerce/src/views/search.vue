<template>
    <form class="d-flex border border-success rounded-pill me-3">
        <div class="input-group">
          <input v-model="search" @input="$emit('search', search)" class="form-control rounded-pill" type="search" placeholder="Search" aria-label="Search">
          <button class="btn input-group-text" type="submit"><i class="fas fa-search text-black"></i></button>
        </div>
      </form>
       <!-- <i class="uil uil-search search-icon"></i>
       <input type="text" v-model="search" @input="$emit('search', search)" placeholder="Search here..." /> -->
   
</template>

<script>
export default {   
    data() {
        return {
            search: '',
        };
    },
};
</script>