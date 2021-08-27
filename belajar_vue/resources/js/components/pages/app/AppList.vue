<template>
    <div>
        <div class="container">
            <div class="row bg-info">
                <div class="col-md-6">
                    <div class="card m-3">
                        <div class="card-body">
                            <list-one class="card-title" title="Post-1"></list-one>
                            <list-one class="card-text" content="ini adalah content untuk post pertama"></list-one>
                        </div>
                    </div>
                    <div class="card m-3">
                        <div class="card-body">
                            <list-two class="card-title" title="Post-2"></list-two>
                            <list-two class="card-text" content="ini adalah content untuk post kedua"></list-two>
                        </div>
                    </div>
                    <div class="card m-3">
                        <div class="card-body">
                            <list-three class="card-title" title="Post-3"></list-three>
                            <list-three class="card-text" content="ini adalah content untuk post ketiga"></list-three>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card m-3">
                        <div class="card-body">
                            <list-four class="card-title" title="Post-4"></list-four>
                            <list-four class="card-text" content="ini adalah content untuk post keempat"></list-four>
                        </div>
                    </div>
                    <div class="card m-3">
                        <div class="card-body">
                            <list-five class="card-title" title="Post-5"></list-five>
                            <list-five class="card-text" content="ini adalah content untuk post kelima"></list-five>
                        </div>
                    </div>
                    <div class="card m-3">
                        <div class="card-body">
                            <list-six class="card-title" title="Post-6"></list-six>
                            <list-six class="card-text" content="ini adalah content untuk post keenam"></list-six>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row bg-success">
                <div class="col-md-6">
                    <div class="card m-3">
                        <div class="card-body">
                            <list-seven class="card-title" title="Post-7"></list-seven>
                            <list-seven class="card-text" content="ini adalah content untuk post ketiga"></list-seven>
                        </div>
                    </div>
                    <div class="card m-3">
                        <div class="card-body">
                            <list-eight class="card-title" title="Post-8"></list-eight>
                            <list-eight class="card-text" content="ini adalah content untuk post ketiga"></list-eight>
                        </div>
                    </div>
                    <div class="card m-3">
                        <div class="card-body">
                            <list-nine class="card-title" title="Post-9"></list-nine>
                            <list-nine class="card-text" content="ini adalah content untuk post ketiga"></list-nine>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card m-3">
                        <div class="card-body">
                            <list-ten class="card-title" title="Post-3"></list-ten>
                            <list-ten class="card-text" content="ini adalah content untuk post ketiga"></list-ten>
                        </div>
                    </div>
                </div>
            </div>
        </div>   
    </div>
</template>

<script>
import ListOne from './App1.vue'
import ListTwo from './App2.vue'
import ListThree from './App3.vue'
import ListFour from './App4.vue'
import ListFive from './App5.vue'
import ListSix from './App6.vue'
import ListSeven from './App7.vue'
import ListEight from './App8.vue'
import ListNine from './App9.vue'
import ListTen from './App10.vue'
export default {
    components : {
        ListOne,
        ListTwo,
        ListThree,
        ListFour,
        ListFive,
        ListSix,
        ListSeven,
        ListEight,
        ListNine,
        ListTen,
    }
}
</script>