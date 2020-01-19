<script>
import RitsButton from '@/components/RitsButton.vue';
export default {
    name:'main-menu',
    components: {
        RitsButton
    }
}
</script>

<template>
    <!-- <nav>
        <div>
            <img src="../../assets/img/rits-logo.png" />
        </div>
        <div>
            <div class="menu-link">A RITS</div>
            <div class="menu-link">NOSSOS VALORES</div>
            <rits-button :text="'VAGAS ABERTAS'"/>
        </div>
    </nav> -->
    <b-navbar toggleable="sm" variant="faded" type="dark" class="p-0" style="margin-top:-10px !important;">

        <b-navbar-brand>
            <img src="../../assets/img/rits-logo.png" />
        </b-navbar-brand>

        <b-navbar-toggle target="nav-text-collapse"></b-navbar-toggle>

        <b-collapse id="nav-text-collapse" is-nav right>
            <b-navbar-nav class="ml-auto" style="display:flex !important; align-items:baseline !important;" right>
                <b-nav-item class="pr-3">A RITS</b-nav-item>
                <b-nav-item class="pr-3">NOSSOS VALORES</b-nav-item>
                <b-nav-item>
                    <rits-button :text="'VAGAS ABERTAS'"/>
                </b-nav-item>
            </b-navbar-nav>
        </b-collapse>
    </b-navbar>
</template>

<style>

.navbar-dark .navbar-nav .nav-link{
    color:#fff !important
}

.navbar-dark .navbar-toggler-icon{
    color:#fff !important;
}
/* nav{
    display:flex; 
    justify-content:space-between; 
    align-items:baseline; 
    width:100%;
    margin:0px 20px;
}

nav > div:nth-child(2){
    display:flex; 
    justify-content:space-between; 
    align-items:baseline; 
    width:40%;
}

nav > div:nth-child(2) > .menu-link{
  font-family: "TT Norms";
  font-size: 14px;
  line-height: 17px;
  letter-spacing: 0.025em;
  text-transform: uppercase;
} */

</style>