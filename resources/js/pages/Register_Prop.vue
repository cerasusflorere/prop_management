<template>
<!-- 登録-使用シーン上ではid=overay と id=contentを有効にする-->
  <div v-bind:id="[val === 1 ? 'overlay' : '']">
    <div v-bind:id="[val === 1 ? 'content' : '']" class="panel">
        <form class="form"  @submit.prevent="register">
          <!-- 小道具 -->
          <label for="character">小道具</label>
          <select id="character_type" class="form__item"  v-model="character_attr">
            <option disabled value="">登場人物の属性</option>
            <option v-for="attr in optionCharacter_attrs" 
              v-bind:value="attr.name" 
              v-bind:key="attr.id">
              {{ attr.name }}
            </option>
          </select>

          <select id="character" class="form__item"  v-model="registerForm.character">
            <option disabled value="">登場人物一覧</option>
            <option v-for="characters in optionCharacters" 
              v-bind:value="characters.name" 
              v-bind:key="characters.id">
              {{ characters.name }}
            </option>
          </select>
 
          <!-- 小道具名 -->
          <label for="prop">小道具</label>
          <input type="text" class="form__item" id="prop" v-model="registerForm.prop">
  
          <!-- ページ数 -->
          <label for="page">ページ数</label>
          <small>例)22, 24-25</small>
          <input type="text" class="form__item" id="page" v-model="registerForm.page">

          <!--- 送信ボタン -->
          <div class="form__button">
            <button type="submit" class="button button--inverse">登録</button>
          </div>
        </form>

        <!-- 登録- 使用シーンでは閉じるボタンを出現させる -->
        <button v-if="val===1" @click="$emit('close')" class="button button--inverse">閉じる</button>
    </div>
  </div>
</template>

<script>
export default {
  name: 'registerProp',
  props: ['val'],
  data() {
    return {
      character_attr: '',
      optionCharacter_attrs: [ 
          { id: 1, name: '移民たち' }, 
          { id: 2, name: '村に残った人々' }, 
          { id: 3, name: '船の人々' } 
      ],
      optionCharacters: [ 
          { id: 1, name: 'アン' }, 
          { id: 2, name: 'メアリー' }, 
          { id: 3, name: 'アンジェラ' },
          { id: 4, name: 'エマ' }, 
          { id: 5, name: 'フィオナ' }, 
          { id: 6, name: 'モイラ' },
          { id: 7, name: 'イアン' }, 
          { id: 8, name: 'ハリー' }, 
          { id: 9, name: 'ジェニファー' },
          { id: 10, name: 'マルグレット' }, 
          { id: 11, name: 'ステファン' }, 
          { id: 12, name: 'ポーラ' },
          { id: 13, name: 'ジョー' }, 
          { id: 14, name: 'エドナ' }, 
          { id: 15, name: 'ブレンダ' },
          { id: 16, name: 'エドワード' }, 
          { id: 17, name: 'グレン' }, 
          { id: 18, name: 'ジョナサン' },
          { id: 19, name: 'サラ' }, 
          { id: 20, name: 'ケリー' }, 
          { id: 21, name: 'モーリーン' },
          { id: 22, name: 'リザ' }, 
          { id: 23, name: 'ジョセフ' }, 
          { id: 24, name: 'クリス' },
          { id: 25, name: 'スーザン' }, 
          { id: 26, name: 'フェルディナンド' },
          { id: 27, name: '未定' }
      ],
      registerForm: {
        character: '',
        prop: '',
        page: ''
      } 
    }
  },
  methods: {
    register () {
      console.log(this.registerForm)
    }
  }
}
</script>

<style>
#overlay{
  z-index:1;
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