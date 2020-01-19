<script>
export default {
    name:'project-footer'    
}
</script>

<template>
    <b-container class="footer" fluid>
        <b-row align-h="center" align-v="center">
            <b-col md="4" >
                <img src="../../assets/img/rits-logo2.png" />
            </b-col>
            <b-col md="4" cols="8">
                <div class="about">
                    <label><b>Rits Tecnologia. Todos os direitos reservados.</b></label>
                    <p>Desenvolver e evoluir soluções digitais para negócios que acreditam na tecnologia como força propulsora.</p>
                </div>
            </b-col>
            <b-col md="4">
                <label style="color:#4EEF61;">Rits.com.br</label>
            </b-col>
        </b-row>
    </b-container>
</template>

<style scoped>
.footer{
    background:#F6F6F7;
    min-height: 147px;
    height:100%;
    box-sizing: border-box;
    padding:35px;
}

.about{
    font-family: "TT Norms";
    font-size: 14px;
    line-height: 110%;
    text-align: center;
    letter-spacing: -0.025em;
    color: #6C6472;
}
</style>