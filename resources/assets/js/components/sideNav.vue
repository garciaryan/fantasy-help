<template>
  <nav class="col-md-2 d-none d-md-block sidebar sidenav">
    <div class="sidebar-sticky">
      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
        <span>Navigation</span>
        <a class="d-flex align-items-center text-muted" href="#">
          <span data-feather="plus-circle"></span>
        </a>
      </h6>
      <ul class="nav flex-column">
        <li class="nav-item">
          <router-link to="/home" class="nav-link active">
            <span data-feather="home"></span>
            Home <span class="sr-only">(current)</span>
          </router-link>
        </li>
        <li class="nav-item">
          <router-link to="/compare" class="nav-link">
            <span data-feather="file"></span>
            <!-- Add counter for each player clicked -->
            Compare
            <span class="badge badge-danger">3</span>
          </router-link>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            Trends
          </a>
        </li>
        <li class="nav-item">
          <router-link to="/players" class="nav-link">
            All Players
          </router-link>
        </li>
      </ul>

      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
        <span>Season</span>
        <a class="d-flex align-items-center text-muted" href="#">
          <span data-feather="plus-circle"></span>
        </a>
      </h6>
      <ul class="nav flex-column mb-2">
        <li class="nav-item">
          <router-link to="/players" class="nav-link">
            Current season
          </router-link>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <span data-feather="file-text"></span>
            Last season
          </a>
        </li>
        <li class="nav-item nav-link">
          <h6 class="sidebar-heading mt-4 mb-1 text-muted">
            <span>Search for a season</span>
            <a class="d-flex align-items-center text-muted" href="#">
              <span data-feather="plus-circle"></span>
            </a>
          </h6>
          <input type="text" class="date-search" placeholder="2017-18">
        </li>
      </ul>
    </div>
    <!-- <router-view></router-view> -->
  </nav>
</template>
<script>
export default {
  data: function() {
    return {
      playerCount: 0
    }
  },

  methods: {
    count(){
      let self = this;

    }
  }
}
</script>
