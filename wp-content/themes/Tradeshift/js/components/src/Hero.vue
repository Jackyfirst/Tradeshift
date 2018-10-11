<template>
    <div>
    <div id="leftSide" class="leftSide">
        <transition enter-active-class="slideInDownThree" leave-active-class="slideOutRight">
            <div class="getStarted" v-if="isShowingRightSide">
                <div class="wrapper">
                    <h1 class="hhero vueconf-logo">{{ h1_hhero }}</h1>
                    <h2 class="hhero">{{ h2_hhero }}</h2>
                    <button class="btn btn-white btn-primary-cta-ent" data-toggle="modal" data-target="#mktoModal2">{{ btn_hhero }}</button>
                </div>
            </div>
        </transition>
    </div>
    <div class="rightSide">
        <div class="data-content">
            <transition enter-active-class="slideInDownTwo" leave-active-class="slideOutRight">
                <div v-if="isShowingRightSide">
                    <div class="data-desc totalCompanies">Lifetime Transaction Volume</div>
                    <div class="data">${{ transactionVolume }}</div>
                </div>
            </transition>
        </div>
    </div>
    </div>
</template>

<script>
export default {
 data() {
     return {
        isShowingRightSide: false,
        transactionVolume: '',
        language: document.querySelector('html').getAttribute('lang'),
        h1_hhero: '',
        h2_hhero: '',
        btn_hhero: ''
     }
 },
 methods: {
    toggleRightSide: function() {
      this.isShowingRightSide = !this.isShowingRightSide;
    },
    fetchData: function () {
        axios.get('https://front-page-metrics.firebaseio.com/masterSheet.json').then((response) => {
            this.transactionVolume = response.data[11][12].toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }, (error) => {
            console.log(error)
        })
    },
    message() {
      switch(this.language) {
        case "fr-FR": {
          this.h1_hhero = "Tradeshift est La Société dédiée aux échanges commerciaux.";
          this.h2_hhero = "Réinventez les processus de gestion des approvisionnements et des transactions fournisseurs. Construisez la supply chain du futur grâce à des applications B2B, des solutions de financements et des marketplaces numériques.";
          this.btn_hhero = "Allez y !";
          break;
        }
        case "de-DE": {
          this.h1_hhero = "Tradeshift ist die Business Commerce Company";
          this.h2_hhero = "Erfinden Sie Beschaffung und Forderungen neu. Machen Sie Ihre Supply-Chain zukunftsfähig - mit digitalen Marktplätzen, Zahlungen und Apps.";
          this.btn_hhero = "Jetzt beginnen";
          break;
        }
        case "ja": {
          this.h1_hhero = "Tradeshiftは企業間取引の 未来を創造します";
          this.h2_hhero = "調達から支払いまでのプロセスを変える時が来ました。サプライチェーンを未来のデジタルマーケットプレイスやアプリで変革します";
          this.btn_hhero = "開始";
          break;
        }
        case "zh-hans": {
          this.h1_hhero = "Tradeshift是一家企业型商务公司。";
          this.h2_hhero = "重新定义采购和应付账款。通过数字市场、支付和应用程序，让您的供应链通向未来。";
          this.btn_hhero = "与专家交谈";
          break;
        }
        default: {
          this.h1_hhero = "Tradeshift is the business commerce company.";
          this.h2_hhero = "Reimagine procurement and payables. Get your supply chain connected to the future with digital marketplaces, payments, and apps.";
          this.btn_hhero = "Talk to an expert";
          break;
        }
      }
    }
  },
  mounted() {
    this.message();
    setTimeout(() => {
      this.toggleRightSide();
    }, 300);
    this.fetchData();
  },
};


</script>

<style>
    @keyframes slideInDownOne {
      0%{opacity:0;transform:translate3d(0,-100%,0)}
      to{ opacity:1;transform:translate3d(0, 0, 0)}
    }
    .fadeInDownOne { animation-name:fadeInDown}

    @keyframes slideInDownTwo {
      0%{opacity:0;transform:translate3d(0,-100%,0)}
      to{ opacity:1;transform:none}
    }
    .fadeInDownTwo{ animation-name:fadeInDown}

    @keyframes slideInDownThree {
      0%{opacity:0;transform:translate3d(0,-100%,0)}
      to{ opacity:1;transform:none}
    }
    .fadeInDownThree {animation-name:fadeInDown}

    .slideInDownOne {
      position: relative;
      animation: slideInDownOne 1.25s ease-out;
    }

    .slideInDownTwo {
      position: relative;
      animation: slideInDownTwo 1.25s ease-out;
    }
    .slideInDownThree {
      position: relative;
      animation: slideInDownThree 1.25s ease-out;
    }

    .growShrink {
      animation: growShrink 1.9s;
    }

    .VideoBg__content {
       background-color: rgba(0,0,0,0.15);
    }

    .VideoBg, .VideoBg video {
       height: 600px !important;
    }

</style>
