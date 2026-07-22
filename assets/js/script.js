// =====================================================
// AOS
// =====================================================
AOS.init({
	// offset: 100,
	duration: 600,
	easing: "ease-in-sine",
	once: true,
});

// =====================================================
// ページトップボタン
// =====================================================
document.addEventListener("DOMContentLoaded", function () {
	const headerTop = document.querySelector(".js-header__top");

	if (!headerTop) return;

	// スクロールイベント
	window.addEventListener("scroll", function () {
		if (window.scrollY > 500) {
			headerTop.classList.add("isActive");
		} else {
			headerTop.classList.remove("isActive");
		}
	});

	// クリックでページトップへ戻る
	headerTop.addEventListener("click", function (e) {
		e.preventDefault(); // aタグ等の場合のリンク動作を防ぐ
		window.scrollTo({
			top: 0,
			behavior: "smooth", // スムーズスクロール
		});
	});
});

// =====================================================
// ページトップボタン（サービスページ用）
// =====================================================
document.addEventListener("DOMContentLoaded", function () {
	const headerTop = document.querySelector(".js-headerService__top");

	if (!headerTop) return;

	// スクロールイベント
	window.addEventListener("scroll", function () {
		if (window.scrollY > 500) {
			headerTop.classList.add("isActive");
		} else {
			headerTop.classList.remove("isActive");
		}
	});

	// クリックでページトップへ戻る
	headerTop.addEventListener("click", function (e) {
		e.preventDefault(); // aタグ等の場合のリンク動作を防ぐ
		window.scrollTo({
			top: 0,
			behavior: "smooth", // スムーズスクロール
		});
	});
});

// =====================================================
// HEADER Scroll Opacity
// =====================================================
document.addEventListener("DOMContentLoaded", function () {
	// PC
	const headerPc = document.querySelector(".js-headerPc");

	if (!headerPc) return;

	window.addEventListener("scroll", function () {
		if (window.scrollY > 50) {
			headerPc.classList.add("isActive");
		} else {
			headerPc.classList.remove("isActive");
		}
	});

	// SP
	const headerSp = document.querySelector(".js-headerSp");
	if (!headerSp) return;

	window.addEventListener("scroll", function () {
		if (window.scrollY > 50) {
			headerSp.classList.add("isActive");
		} else {
			headerSp.classList.remove("isActive");
		}
	});
});

// =====================================================
// SP Header Menu
// =====================================================
document.addEventListener("DOMContentLoaded", () => {
	const headerSp = document.querySelector(".js-headerSp");
	const btn = document.querySelector(".js-headerSp__menu");
	const menu = document.querySelector(".js-spMenu");
	const body = document.body;

	if (btn && menu && body && headerSp) {
		btn.addEventListener("click", () => {
			btn.classList.toggle("isActive");
			menu.classList.toggle("isActive");
			headerSp.classList.toggle("isOpen");
			body.classList.toggle("isHidden");
		});
	}
});

// =====================================================
// COMPONENT COMPANY INFO Splide
// =====================================================
document.addEventListener("DOMContentLoaded", () => {
	const indexCompany = document.querySelector(".js-company-info__splide");
	if (indexCompany) {
		new Splide(indexCompany, {
			type: "fade",
			speed: 3000,
			autoplay: true,
			interval: 4000, //自動再生間隔
			rewind: true,
			arrows: true, //矢印ボタン
			pagination: false, //ページネーション
		}).mount(window.splide.Extensions);
	}
});

// =====================================================
// INDEX SOLUTION SEC2
// =====================================================
const wrapper = document.querySelector(".js-index-solution-sec2__container");
const prev = document.querySelector(".js-index-solution_sec2__btn--left");
const next = document.querySelector(".js-index-solution_sec2__btn--right");

const getStep = () => wrapper.clientWidth * 0.4; // 枠の80%分スクロール
if (wrapper && prev && next) {
	next.addEventListener("click", () => {
		wrapper.scrollBy({ left: getStep(), behavior: "smooth" });
	});

	prev.addEventListener("click", () => {
		wrapper.scrollBy({ left: -getStep(), behavior: "smooth" });
	});
}

// =====================================================
// COMPANY Sec1 card
// =====================================================

document.addEventListener("DOMContentLoaded", () => {
	const companySec1Card = document.querySelector(".js-company-sec1__card");
	if (companySec1Card) {
		new Splide(companySec1Card, {
			type: "slide",
			arrows: false, //矢印ボタン
			pagination: true, //ページネーション
			gap: 13,
			fixedWidth: "min(230px,80%)",
			// fixedWidth: "230px",
			destroy: true,
			breakpoints: {
				767: {
					// 767px以下の場合
					destroy: false,
				},
			},
		}).mount();
	}
});

// =====================================================
// RECRUIT Tab
// =====================================================
// =====================================================
// タブ切り替え
// =====================================================
const tabs = document.querySelectorAll(".js-recruit__tabItem"); //タブ要素
const tabContent = document.querySelectorAll(".js-recruit__tabContent"); //タブコンテンツ要素

document.addEventListener(
	"DOMContentLoaded",
	function () {
		// タブに対してクリックイベントを適用
		for (let i = 0; i < tabs.length; i++) {
			tabs[i].addEventListener("click", tabSwitch, false);
		}

		// タブをクリックすると実行する関数
		function tabSwitch() {
			console.log("タブがクリックされてるよ");
			// タブのclassの値を変更
			for (let i = 0; i < tabs.length; i++) {
				tabs[i].classList.remove("isActive");
			}
			for (let i = 0; i < tabContent.length; i++) {
				tabContent[i].classList.remove("isShow");
			}
			// クリックしたtabsに.isActiveを追加;
			this.classList.add("isActive");
			// tabsを配列化
			const aryTabs = Array.prototype.slice.call(tabs);

			// 配列に格納したキーワードと最初一致したインデックスを格納
			const index = aryTabs.indexOf(this);

			// インデックスに対応したtabContentに.isShowを追加
			tabContent[index].classList.add("isShow");
		}
	},
	false
);

// =====================================================
// SP SERVICE CONTACT
// =====================================================
document.addEventListener("DOMContentLoaded", () => {
	const contactBtn = document.querySelector(".js-service-sp__contact");
	const form = document.querySelector(".js-service__form");
	const contactClose = document.querySelector(".js-service-sp__close");
	const body = document.body;

	if (contactBtn && form && contactClose) {
		contactBtn.addEventListener("click", () => {
			form.classList.add("isActive");
			body.classList.add("isHidden");
		});
		contactClose.addEventListener("click", () => {
			form.classList.remove("isActive");
			body.classList.remove("isHidden");
		});
	}
});

// =====================================================
// SERVICE FUNCTION ACCORDION
// =====================================================
document.addEventListener("DOMContentLoaded", () => {
	const details = document.querySelectorAll(".js-service-function-sec2__item");

	if (details) {
		details.forEach((element) => {
			element.addEventListener("click", () => {
				element.classList.toggle("isActive");
			});
		});
	}
});

// =====================================================
// SERVICE PRICE ACCORDION
// =====================================================
document.addEventListener("DOMContentLoaded", () => {
	const priceItem = document.querySelectorAll(".js-service-price__item");

	if (priceItem) {
		priceItem.forEach((element) => {
			element.addEventListener("click", () => {
				element.classList.toggle("isActive");
			});
		});
	}
});

// =====================================================
// SERVICE FAQ ACCORDION
// =====================================================
document.addEventListener("DOMContentLoaded", () => {
	const faqItem = document.querySelectorAll(".js-service-faq__item");

	if (faqItem) {
		faqItem.forEach((element) => {
			element.addEventListener("click", () => {
				element.classList.toggle("isActive");
			});
		});
	}
});

// =====================================================
// SERVICE TOOLS
// =====================================================
document.addEventListener("DOMContentLoaded", () => {
	// 処理を記述
	const wrapper = document.querySelector(".js-service-tool__container");
	const prev = document.querySelector(".js-service-infinity-tool__btn--left");
	const next = document.querySelector(".js-service-infinity-tool__btn--right");

	if (wrapper && prev && next) {
		const getStep = () => wrapper.clientWidth * 0.4; // 枠の80%分スクロール
		if (wrapper && prev && next) {
			next.addEventListener("click", () => {
				wrapper.scrollBy({ left: getStep(), behavior: "smooth" });
			});

			prev.addEventListener("click", () => {
				wrapper.scrollBy({ left: -getStep(), behavior: "smooth" });
			});
		}
	}
});

// =====================================================
// SERVICE compare
// =====================================================
document.addEventListener("DOMContentLoaded", () => {
	// 処理を記述
	const wrapper = document.querySelector(".js-service-compare__container");
	const prev = document.querySelector(".js-service-compare__btn--left, .js-service-infinity-compare__btn--left, .js-service-harmony-compare__btn--left");
	const next = document.querySelector(".js-service-compare__btn--right, .js-service-infinity-compare__btn--right, .js-service-harmony-compare__btn--right");

	if (wrapper && prev && next) {
		const getStep = () => wrapper.clientWidth * 0.4; // 枠の80%分スクロール
		if (wrapper && prev && next) {
			next.addEventListener("click", () => {
				wrapper.scrollBy({ left: getStep(), behavior: "smooth" });
			});

			prev.addEventListener("click", () => {
				wrapper.scrollBy({ left: -getStep(), behavior: "smooth" });
			});
		}
	}
});
