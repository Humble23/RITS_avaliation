
<script>
export default {
    name:'info-list',
    props: ['info']
}
</script>
<template>
    <div>
        <p>{{ info.title }}</p>
        <ul>
            <li v-for="(item,i) in info.topics"
            :key="i">{{ item }}</li>
        </ul>
    </div>
</template>

<style scoped>
div{
    text-align: left;
    width: 368px;
    height: 264px;
}

div > p{
    font-weight: bold;
    font-size: 18px;
    line-height: 110%;
    /* or 20px */

    letter-spacing: -0.025em;
}

div > ul{
    list-style-image: url('../assets/img/checkicon.png');
    padding-left: 18px;
    list-style-type: none;
}

div > ul > li{
    font-size: 16px;
    line-height: 130%;
    /* or 21px */
    color:#bbb;
    margin-top:15,px;
    letter-spacing: -0.025em;
}
</style>