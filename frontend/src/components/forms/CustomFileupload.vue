<script>
import ClipIcon from '../../assets/svg/clip.svg';
export default {
    name:'custom-fileupload',
    components:{
        ClipIcon
    }
}
</script>

<template>
    <div class="custom-fileupload">
        <button class="custom-btn">
            <clip-icon class="clip-icon" /> 
            Escolha o arquivo
        </button>
        <input type="file" name="myfile">
    </div>
</template>

<style>

.custom-fileupload {
    position: relative;
    overflow: hidden;
    display: inline-block;
    cursor:pointer;
}

.custom-btn {
    width:260px;
    max-width: 368px;
    background-color: white;
    padding: 8px 20px;
    border: 2px solid #4EEF61;
    box-sizing: border-box;
    border-radius: 50px;
    font-size: 16px;
    line-height: 110%;
    text-align: center;
    letter-spacing: -0.025em;
}

.custom-fileupload input[type=file] {
    font-size: 100px;
    position: absolute;
    left: 0;
    top: 0;
    opacity: 0;
}
</style>