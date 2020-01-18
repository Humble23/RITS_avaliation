<script>
import CustomInput from '@/components/CustomInput.vue';

export default {
    name:'form',
    components:{
        CustomInput
    }
}
</script>
<template>
    <div>
        <b-row>
            <b-col>
                <label>Informações pessoais</label>
            </b-col>
        </b-row>
        <b-row>
            <b-col>
                <custom-input :name="'Nome Completo'"/>
            </b-col>
        </b-row>
        <b-row>
            <b-col>
                <custom-input :name="'Email'"/>
            </b-col>
        </b-row>
        <b-row>
            <b-col>
                <custom-input :name="'Telefone (COM DDD)'"/>
            </b-col>
        </b-row>
        <b-row>
            <b-col>
                <label>Carta de Apresentação</label>
            </b-col>
        </b-row>
        <b-row>
            <b-col>
                <label>Carta de Apresentação</label>
            </b-col>
        </b-row>
        <b-row>
            <b-col>
                <label>Últimas Perguntas</label>
            </b-col>
        </b-row>
        <b-row>
            <b-col>
                <custom-input :name="'Url do seu linkedin'"/>
            </b-col>
        </b-row>
        <b-row>
            <b-col>
                <custom-input :name="'Url do seu github'"/>
            </b-col>
        </b-row>
        <b-row>
            <b-col>
                <custom-input :name="'Url do seu github'"/>
            </b-col>
        </b-row>
        <b-row>
            <b-col>
                <custom-input :name="'Pretenção Salarial'"/>
            </b-col>
        </b-row>
    </div>
</template>
<style scoped>
label{
    font-size: 24px;
    line-height: 110%;
    /* or 26px */

    text-align: center;
    letter-spacing: -0.025em;

    /* BG Escuro */

    color: #2E2236;
}
</style>