<script>
export default {
    name:'custom-select',
    props:['label', 'english_level', 'error', 'placeholder'],
    computed: {
        english: {
            get() {
                return this.value;
            },

            set(newValue, oldValue) {
                if (newValue !== oldValue) this.$emit("update:value", newValue);
            }
        },
    }
}
</script>

<template>
    <div class="select-style">
        <label>{{label}}</label>
        <select 
            class="custom-select" 
            :class="error ? ' has-error' : ''" 
            :placeholder="placeholder"
            v-model="english">
            <option value="" selected>Escolha</option>
            <option value="Básico">Básico</option>
            <option value="Médio">Médio</option>
            <option value="Avançado">Avançado</option>
        </select>
        <div class="error">
            <p>
                {{error ? error[0] : ''}}
            </p>
        </div>
    </div>
</template>

<style scoped>
.custom-select{
    width: 28%;
    min-width: 300px;
    height: 60px;
    text-indent:7px;
    margin:5px 0px;
    appearance:none;
    -webkit-appearance:none;
    -moz-appearance:none;
    background: #F6F6F7;
    font-family: "TT Norms";
    border:none;
    box-sizing: border-box;
    border-radius: 2px;
    font-size: 16px;
    line-height: 130%;
    letter-spacing: -0.025em;
}

.custom-select:focus{   
    border-color: rgba(78, 239, 97, 0.8);
    box-shadow: 0 1px 1px rgba(78, 239, 97, 0.075) inset, 0 0 0px 2px rgba(78, 239, 97, 0.6);
    outline: 0 none;
}

label{
    position:absolute;
    transform:translate(18px, 14px);
    color: #6C6472;
    font-size: 10px;
    line-height: 110%;
    /* identical to box height, or 11px */

    letter-spacing: -0.025em;
    text-transform: uppercase;
}

.has-error{
  border-color: rgba(235, 64, 52, 0.8) !important;
  box-shadow: 0 1px 1px rgba(235, 64, 52, 0.075) inset, 0 0 0px 2px rgba(235, 64, 52, 0.6) !important;
  outline: 0 none !important;
}

.error{
  max-width:300px;
  margin:0px auto;
}

.error > p{
  color:red;
  text-align: left;
  font-size:15px;
  margin:0px;
}

@media (max-width: 320px) { 
    label{
        transform:translate(-126px, 14px);
    }
}
</style>