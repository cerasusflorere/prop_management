<template>
  <div id="overlay">
    <div id="content" class="panel">
      <ul>
        <li v-for="prop in props">
          <div type="button" @click="openModal_propDetail(prop)">{{ prop.name }}</div>
        </li>
        <detailProp :val="postProp" v-show="showContent" @close="closeModal_propDetail" />
      </ul>
      <button type="button" @click="$emit('close')" class="button button--inverse">閉じる</button>
    </div>
  </div>
  
</template>

<script>
import detailProp from './Detail_Prop.vue'
export default {
  // モーダルとしてこのページを表示
  name: 'listProps',
  // このページの上で表示するコンポーネント
  components: {
    detailProp
  },
  // データ
  data() {
    return {
      // 小道具リスト
      props: [ 
          { id: 1, name: '手紙', owner: 'owner-1', url: 'url-1', usage: 1 }, 
          { id: 2, name: 'ペン', owner: 'owner-2', url: 'url-2', usage: 0 }, 
          { id: 3, name: 'くわ', owner: 'owner-3', url: 'url-3', usage: 1 }
      ],
      // 小道具詳細
      showContent: false,
      postProp: "",
    }
  },
  methods: {
    // 小道具詳細のモーダル表示 
    openModal_propDetail (prop) {
      this.showContent = true
      this.postProp = prop;
    },
    // 小道具詳細のモーダル非表示
    closeModal_propDetail() {
      this.showContent = false
    },
  }
}
</script>

<style>
#overlay{
  overflow-y: scroll;
  z-index: 9999;
  position:fixed;
  top:0;
  left:0;
  width:100%;
  height:100%;
  background-color:rgba(0, 0, 0, 0.2);
  display: flex;
  align-items: center;
  justify-content: center;
}

#content{
  z-index: 2;
  width: 50%;
  background-color: white;
}
</style>
