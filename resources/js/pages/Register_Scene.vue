<template>
  <div class="panel">
      <form class="form"  @submit.prevent="register">
        <!-- 登場人物 -->
        <label for="character">登場人物</label>
        <select id="character_type" class="form__item"  v-model="attr">
          <option disabled value="">登場人物属性</option>
          <option v-for="attr in optionAttrs" 
            v-bind:value="attr.name" 
            v-bind:key="attr.id">
            {{ attr.name }}
          </option>
        </select>

        <select id="character" class="form__item"  v-model="registerForm.character">
          <option disabled value="">登場人物一覧</option>
          <option v-for="character in optionCharacters" 
            v-bind:value="character.name" 
            v-bind:key="character.id">
            {{ character.name }}
          </option>
        </select>

        <!-- 小道具名 -->
        <label for="prop">小道具</label>
        <select id="prop" class="form__item"  v-model="registerForm.prop">
          <option disabled value="">小道具一覧</option>
          <option v-for="prop in optionProps" 
            v-bind:value="prop.name" 
            v-bind:key="prop.id">
            {{ prop.name }}
          </option>
        </select>
        <div class="form__button">
          <button @click="openModal_register()" class="button button--inverse">新たな小道具追加</button>
        </div>
        <registerProp :val="postFlag" v-show="showContent" @close="closeModal_register" />

        <!-- ページ数 -->
        <label for="page">ページ数</label>
        <small>例) 22, 24-25</small>
        <input type="text"  id="page" class="form__item" v-model="registerForm.page">

        <!-- 使用するか -->
        <div class="form__check">
          <input type="radio" id="usage" class="form__check__input" v-model="registerForm.usage" checked></input>
          <label for="usage" class="form__check__label">中間発表での使用</label>
        </div>
        
        

        <!--- 送信ボタン -->
        <div class="form__button">
          <button type="submit" class="button button--inverse">登録</button>
        </div>
      </form>
  </div>
</template>

<script>
import registerProp from './Register_Prop.vue'
export default {
  components: {
    registerProp
  },
  data() {
    return {
      showContent: false,
      postFlag: "",
      attr: '',
      optionAttrs: [ 
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
      optionProps: [ 
          { id: 1, name: '手紙' }, 
          { id: 2, name: 'ペン' }, 
          { id: 3, name: 'くわ' }
      ],
      registerForm: {
        character: '',
        prop: '',
        page: '',
        usage: ''
      } 
    }
  },
  methods: {
    register () {
      console.log(this.registerForm)
    },
    openModal_register () {
      this.showContent = true
      this.postFlag = 1;
    },
    closeModal_register (){
      this.showContent = false
    }
  }
}
</script>