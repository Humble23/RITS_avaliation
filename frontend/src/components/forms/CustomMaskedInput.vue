<script>
import { VueMaskDirective } from 'v-mask';

export default {
    name:'custom-input',
    props:['label', 'placeholder', 'value', 'param', 'error', 'mask'],
    computed:{
      new_value: {
        get() {
          return this.value;
        },

        set(newValue, oldValue) {
          if (newValue !== oldValue) this.$emit("update:value", newValue);
        }
      },
    },
    directives: {
      mask: VueMaskDirective
    }
}
</script>

<template>
  <div class="input">
    <label>{{label}}</label>
    <input
      class="custom-input"
      :class="error ? ' has-error' : ''" 
      :placeholder="placeholder" 
      v-model="new_value" 
      v-mask='mask' />
      <div class="error">
        <p>
          {{error ? error[0] : ''}}
        </p>
      </div>
  </div>
</template>

<style scoped>

::placeholder {
  color: #ccc;
  font-size: 16px;
  line-height: 130%;
  letter-spacing: -0.025em;
  color: #D1D0D1;
}

.custom-input{
    width: 28%;
    min-width: 300px;
    height: 60px;
    text-indent:18px;
    margin:5px 0px;
    background: #F6F6F7;
    font-family: "TT Norms";
    border:none;
    box-sizing: border-box;
    border-radius: 2px;
    font-size: 16px;
    line-height: 130%;
    letter-spacing: -0.025em;
}

.has-error{
  border-color: rgba(235, 64, 52, 0.8) !important;
  box-shadow: 0 1px 1px rgba(235, 64, 52, 0.075) inset, 0 0 0px 2px rgba(235, 64, 52, 0.6) !important;
  outline: 0 none !important;
}

.custom-input:focus{   
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
    letter-spacing: -0.025em;
    text-transform: uppercase;
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