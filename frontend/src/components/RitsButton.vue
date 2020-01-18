<script>
export default {
    name:'rits-button',
    props: ['text', 'widthPercent']
}
</script>

<template>
    <button 
        :style="widthPercent ? 'width:'+ widthPercent + '%': '' 
        + !widthPercent ? 'box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);': ''">{{ text }}</button>
</template>


<style scoped>
button{
    background:#4EEF61;
    border:none;
    width: 176px;
    height: 40px;
    border-radius:100px;
    outline: none;
}

button:focus {outline:0;}
</style>