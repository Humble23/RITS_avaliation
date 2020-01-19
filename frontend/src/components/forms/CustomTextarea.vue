<script>
export default {
    name:'custom-textarea',
    props:['name', 'error', 'value'],
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
    <label>Conte sua motivação</label>
    <textarea 
      rows="1" 
      cols="50"
      placeholder="Faça um breve resumo sobre você"
      style="padding:20px 0px 0px 18px;"
      v-model="new_value"
      wrap="physical" 
      :name="name" class="custom-textarea" 
      :class="error ? ' has-error' : ''" ></textarea>
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

.custom-textarea{
  width: 28%;
  min-width: 300px;
  height: 140px;
  margin:5px 0px;
  background: #F6F6F7;
  font-family: "TT Norms";
  border:none;
  box-sizing: border-box;
  border-radius: 2px;
  font-size: 16px;
  line-height: 130%;
  letter-spacing: -0.025em;
  resize: none;
}

.custom-textarea:focus{   
    border-color: rgba(78, 239, 97, 0.8);
    box-shadow: 0 1px 1px rgba(78, 239, 97, 0.075) inset, 0 0 0px 2px rgba(78, 239, 97, 0.6);
    outline: 0 none;
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


label{
    position:absolute;
    transform:translate(18px, 14px);
    color: #6C6472;
    font-size: 10px;
    line-height: 110%;
    letter-spacing: -0.025em;
    text-transform: uppercase;
}

@media (max-width: 320px) { 
    label{
        transform:translate(-126px, 14px);
    }
}
</style>