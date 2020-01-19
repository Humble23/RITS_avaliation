
<script>
import RitsButton from '@/components/RitsButton.vue';
import InfoList from '@/components/InfoList.vue';
import MainMenu from '@/components/layout/MainMenu.vue';

export default {
    name:'main-header',
    data () {
        return {
            infos:[
                {
                    title: "Na função de Desenvolvedor Frontend aqui na Rits, você vai:",
                    topics: [
                        "Transformar layouts (XD e Photoshop) em montagens responsivas utilizando HTML + CSS + JS;",
                        "Integrar montagem com APIs desenvolvidas por outras equipes;",
                        "Manter e melhorar a base de código existente corrigindo bugs e refatorando código quando necessário."
                    ]
                },
                {
                    title: "Procuramos alguém que:",
                    topics: [
                        "Possua habilidades arquiteturais para desenvolvimento de software;",
                        "Goste de trabalhar em equipe;",
                        "Seja focado, proativo, tenha boa comunicação e relacionamento interpessoal."
                    ]
                },
                {
                    title: "No dia a dia na Rits, você trabalhará também com:",
                    topics: [
                        "WordPress e sistemas em PHP em geral;",
                        "Webpack e Bootstrap;",
                        "Frameworks javascript modernos (Vue 2, React)."
                    ]
                }
            ]
        }
    },
    components: {
        RitsButton,
        InfoList,
        MainMenu
    }
}
</script>

<template>
        <b-container class="fill home" style="color:#fff; padding:0px;" fluid>
            <b-container class="fill header" fluid>
                    <main-menu class="mb-5"/>
                <b-row style="margin-top:-40px;">
                    <b-col>
                        <label style="color: #4EEF61; font-size: 12px;">NATAL/RN - BRASIL</label>
                    </b-col>
                </b-row>
                <b-row class="mb-3">
                    <b-col>
                        <h2 class='title'>Desenvolvedor PHP</h2>
                    </b-col>
                </b-row>
                <b-row class="m-3">
                    <b-col>
                        <rits-button :text="'CANDIDATE-SE'"/>
                    </b-col>
                </b-row>
                <b-row class="mt-1">
                    <b-col md="4">
                        <info-list :info="infos[0]"/>
                    </b-col>
                    <b-col md="4">
                        <info-list :info="infos[1]"/>
                    </b-col>
                    <b-col md="4">
                        <info-list :info="infos[2]"/>
                    </b-col>
                </b-row>
            </b-container>
        </b-container>
</template>

<style scoped>

.title{
  font-size: 46px;
  line-height: 110%;
  font-family: "TT Norms, bold";
  text-align: center;
  letter-spacing: -0.025em;
}

.fill { 
    min-height: 100%;
    height: auto;
    box-sizing: border-box;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
}

.header{
    background:rgba(45, 34, 54,.95);
    padding:30px 100px !important;
}

@media (max-width: 320px) { 
    .title{
        font-size:40px;
    }
}

@media (max-width: 760px) { 
     .header{
        padding: 30px 30px !important;
    }
 }
@media (min-width: 1200px) {
    .header{
        padding: 30px 180px !important;
    }
}

.home{
  height: auto;
  background-image: url("../../assets/img/background.png");
}
</style>