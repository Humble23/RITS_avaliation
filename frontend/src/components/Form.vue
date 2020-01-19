<script>
import CustomInput from '@/components/forms/CustomInput.vue';
import CustomTextarea from '@/components/forms/CustomTextarea.vue';
import CustomSelect from '@/components/forms/CustomSelect.vue';
import CustomFileupload from '@/components/forms/CustomFileupload.vue';
import RitsButton from '@/components/RitsButton.vue';
import { register } from "@/api/candidates";
import { VMoney } from 'v-money';
import { VueMaskDirective } from 'v-mask'

export default {
    name:'custom-form',
    data () {
        return {
                money: {
                    decimal: ',',
                    thousands: '.',
                    prefix: 'R$ ',
                    precision: 2,
                    masked: false /* doesn't work with directive */
                },
                form: {
                    name: 'teste',
                    email: '',
                    phone: '',
                    linkedin_link: '',
                    github_link: '',
                    english_level: '',
                    salary: '',
                    curriculum: ''
                }
        }
    },
    components:{
        CustomInput,
        CustomTextarea,
        CustomSelect,
        RitsButton,
        CustomFileupload
    },
    directives: {
        money: VMoney,
        VueMaskDirective
    },
    methods:{
        async onSubmit(e){
            e.preventDefault();
            await this.register(this.form);

        },
        fileChanged(payload){
            this.form.curriculum = payload;
        },
        register
    }
}
</script>

<template>
    <div class="form">
        <b-form @submit="onSubmit">
            <b-row>
                <b-col>
                    <label>Informações pessoais</label>
                </b-col>
            </b-row>
            <b-row>
                <b-col>
                    <custom-input 
                        type="text"
                        :label="'Nome Completo'" 
                        :input-name="'name'"
                        :value.sync="form.name"
                        :placeholder="'seu nome'"/>
                </b-col>
            </b-row>
            <b-row>
                <b-col>
                    <custom-input 
                        type="email"
                        :label="'Email'" 
                        :input-name="'email'"
                        :value.sync="form.email"
                        :placeholder="'email@email.com.br'"/>
                </b-col>
            </b-row>
            <b-row>
                <b-col>
                    <custom-input 
                        type="tel"
                        :label="'Telefone (COM DDD)'" 
                        :input-name="'phone'"
                        :value.sync="form.phone"
                        :placeholder="'(xx) xxxxx-xxxx'" />
                </b-col>
            </b-row>
            <b-row class="mt-4">
                <b-col>
                    <label>Carta de Apresentação</label>
                </b-col>
            </b-row>
            <b-row>
                <b-col>
                    <custom-textarea />
                </b-col>
            </b-row>
            <b-row class="mt-4">
                <b-col>
                    <label>Últimas Perguntas</label>
                </b-col>
            </b-row>
            <b-row>
                <b-col>
                    <custom-input 
                        :value.sync="form.linkedin_link"
                        :label="'Url do seu linkedin'" 
                        :placeholder="'www.linkedin.com/xxxxxxxxxx'"
                        :input-name="'linkedin_link'" />
                </b-col>
            </b-row>
            <b-row>
                <b-col>
                    <custom-input 
                        :label="'Url do seu github'" 
                        :value.sync="form.github_link"
                        :placeholder="'www.github.com/xxxxxxxxxx'"
                        :input-name="'github_link'" />
                </b-col>
            </b-row>
            <b-row>
                <b-col>
                    <custom-select 
                        :value.sync="form.english_level"
                        :label="'Qual o seu nível de inglês'" />
                </b-col>
            </b-row>
            <b-row>
                <b-col>
                    <custom-input 
                        :label="'Pretenção Salarial'" 
                        :value.sync="form.salary"
                        v-money="money" />
                </b-col>
            </b-row>
            <b-row class="mt-5">
                <b-col>
                    <label>Anexe seu currículo em PDF ou DOC</label>
                </b-col>
            </b-row>
            <b-row>
                <b-col>
                    <custom-fileupload 
                        class="my-3"
                        :curriculum="form.curriculum"
                        @fileChanged="fileChanged"
                        :text="'Escolha o arquivo'" />
                </b-col>
            </b-row>
            <b-row>
                <b-col>
                    <rits-button type="submit" class="mt-3" :text="'ENVIAR'" :widthPercent="35" />
                </b-col>
            </b-row>
        </b-form>
    </div>
</template>

<style scoped>
label{
    font-size: 24px;
    line-height: 110%;
    font-family: "TT Norms, bold";
    text-align: center;
    letter-spacing: -0.025em;
    color: #2E2236;
}

</style>