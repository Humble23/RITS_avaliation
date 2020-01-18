<script>
export default {
    name:'custom-input',
    props:['name']
}
</script>
<template>
  <div>
    <label>{{name}}</label>
    <input :name="name" class="custom-input" />
  </div>
</template>
<style scoped>

.custom-input{
    width: 28%;
    min-width: 300px;
    height: 60px;
    text-indent:18px;
    margin:5px 0px;
    background: #F6F6F7;
    /* Verde */
    box-sizing: border-box;
    border-radius: 2px;
    font-size: 16px;
    line-height: 130%;
    /* identical to box height, or 21px */

    letter-spacing: -0.025em;

    /* BG Escuro */

    /* color: #2E2236; */
}

label{
    position:absolute;
    transform:translate(21px, 14px);
    color: #6C6472;
    font-size: 10px;
    line-height: 110%;
    /* identical to box height, or 11px */

    letter-spacing: -0.025em;
    text-transform: uppercase;
}
</style>