<template>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <router-link to="/options"> Options</router-link>
        </li>
        <li class="nav-item">
          <router-link to="/composition"> Composition</router-link>
        </li>
        <li class="nav-item">
          <router-link to="/store"> Store</router-link>
        </li>
        <li class="nav-item">
          <router-link to="/books"> Composeable Books </router-link>
        </li>
        <li class="nav-item">
          <router-link :to="{ name: 'booksCreate' }"> Books Create</router-link>
        </li>
        <li class="nav-item">
          <router-link :to="{ name: 'PiniaStore' }"> Pinia Store</router-link>
        </li>
        <li class="nav-item">
          <router-link :to="{ name: 'emit' }"> Event</router-link>
        </li>
      </ul>
    </div>
  </nav>
</template>
<script>
export default {};
</script>
