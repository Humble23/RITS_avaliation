<script>
import RitsButton from '@/components/RitsButton.vue';
import InfoList from '@/components/InfoList.vue';
import MainMenu from '@/components/layout/MainMenu.vue';
import MainForm from '@/components/Form.vue';

export default {
    name: 'home',
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
    MainMenu,
    MainForm
  }
}
</script>

<template>
    <div>
        <b-container class="fill home" style="color:#fff; padding:0px;" fluid>
                <b-container class="fill" style="background:rgba(45, 34, 54,.95); padding: 30px 80px;" fluid>
                    <b-row class="mb-5">
                        <main-menu />
                    </b-row>
                    <b-row>
                        <b-col>
                            <label style="color: #4EEF61; font-size: 12px;">Natal/RN - Brasil</label>
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
                    <b-row class="mt-5">
                        <b-col>
                            <info-list :info="infos[0]"/>
                        </b-col>
                        <b-col>
                            <info-list :info="infos[1]"/>
                        </b-col>
                        <b-col>
                            <info-list :info="infos[2]"/>
                        </b-col>
                    </b-row>
                </b-container>
            </b-container>
            <b-container class="fill" fluid style="background:#fff;">
                <main-form />
            </b-container>
            <b-container fluid style="background:#F6F6F7; padding:30px; 0px;">
                <b-row align-v="center">
                    <b-col>
                        <img src="../assets/img/rits-logo2.png" />
                    </b-col>
                    <b-col>
                        <p><b>Rits Tecnologia. Todos os direitos reservados.</b></p>
                        <p>Desenvolver e evoluir soluções digitais para negócios que acreditam na tecnologia como força propulsora.</p>
                    </b-col>
                    <b-col>
                        <label style="color:#4EEF61;">Rits.com.br</label>
                    </b-col>
                </b-row>
        </b-container>
    </div>
</template>

<style>
.title{
  font-weight: bold;
  font-size: 46px;
  line-height: 110%;
  /* or 51px */

  text-align: center;
  letter-spacing: -0.025em;
}

.fill { 
    min-height: 100%;
    height: auto;
    padding:30px 0px;
    box-sizing: border-box;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
}

.home{
  background-image: url("../assets/img/background.png");
}
</style>