<script>
import MainFooter from '@/components/layout/Footer.vue';
import MainHeader from '@/components/layout/Header.vue';
import MainForm from '@/components/Form.vue';

export default {
    name: 'home',
    components: {
        MainForm,
        MainHeader,
        MainFooter
    },
}
</script>

<template>
    <div>
        <main-header />
        <b-container class="fill" fluid style="background:#fff;">
            <main-form />
        </b-container>
        <main-footer />
    </div>
</template>

<style>

.fill { 
    min-height: 100%;
    height: auto;
    box-sizing: border-box;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
}

</style>