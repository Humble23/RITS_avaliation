<script>
import ClipIcon from '../../assets/svg/clip.svg';
export default {
    name:'custom-fileupload',
    props: ['value', 'curriculum', 'error'],
    components:{
        ClipIcon
    },
    methods: {
        fileChanged() {
            this.$emit("fileChanged", this.$refs.file.files[0]);
        },
    }

}
</script>

<template>
    <div class="custom-fileupload">
        <button 
            class="custom-btn"
            :class="error ? ' has-error' : ''" >
            <template v-if="!curriculum">
                <clip-icon class="clip-icon" /> 
                Escolha o arquivo
            </template>
            <template>
                {{ curriculum.name }}
            </template>
        </button>
        <div class="error">
            <p>
            {{error ? error[0] : ''}}
            </p>
        </div>
        <input 
            type="file" 
            name="myfile"
            ref="file"
            v-on:change="fileChanged()" />
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

.has-error{
  border-color: rgba(235, 64, 52, 0.8) !important;
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

.custom-fileupload input[type=file] {
    font-size: 100px;
    position: absolute;
    left: 0;
    top: 0;
    opacity: 0;
}
</style>