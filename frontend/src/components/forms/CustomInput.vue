<script>
export default {
    name:'custom-input',
    props:['label', 'placeholder', 'value', 'param'],
    computed:{
      new_value: {
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
  <div>
    <label>{{label}}</label>
    <input 
      class="custom-input" 
      :placeholder="placeholder" 
      v-model="new_value" />
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
</style>