// =====================================================
// サイドナビ - ここから下は使用しません
// =====================================================
window.addEventListener("DOMContentLoaded", () => {
	const menuSettings = document.querySelector("#menu-settings");
	const newLi = document.createElement("li");
	newLi.classList.add("sideNoUse");
	newLi.textContent = "ここから下は使用しません";
	menuSettings.parentNode.insertBefore(newLi, menuSettings);
});

// =====================================================
// ダッシュボード表示
// =====================================================
document.addEventListener("DOMContentLoaded", () => {
	const dashboardWrap = document.getElementById("dashboard-widgets-wrap");
	const dashboardView = document.createElement("a");
	dashboardView.href = "#";
	dashboardView.className = "dashboard_view";
	dashboardWrap.parentNode.insertBefore(dashboardView, dashboardWrap);

	dashboardView.addEventListener("click", (event) => {
		event.preventDefault();
		const dashboardWidgetsWrap = document.getElementById("dashboard-widgets-wrap");
		dashboardWidgetsWrap.style.display = dashboardWidgetsWrap.style.display === "none" ? "block" : "none";
	});
});

// =====================================================
// .acf-field slug表示
// =====================================================
document.addEventListener("DOMContentLoaded", () => {
	document.querySelectorAll(".acf-field").forEach((field) => {
		field.querySelector(".acf-label label").appendChild(createSlugLabel(field.getAttribute("data-name")));
	});

	document.querySelectorAll(".acf-th").forEach((th) => {
		th.appendChild(createSlugLabel(th.getAttribute("data-name")));
	});
});

const createSlugLabel = (slug) => {
	const slugLabel = document.createElement("p");
	slugLabel.className = "slugLabel";
	slugLabel.textContent = slug;
	return slugLabel;
};

// =====================================================
// All-in-Ome WP Migration データベースエクスポート以外チェック付与
// =====================================================
document.addEventListener("DOMContentLoaded", () => {
	// URLに特定の文字列が含まれているかチェック
	if (location.href.indexOf("page=ai1wm_export") !== -1) {
		// エクスポート画面での処理

		// オプション用アコーディオンメニューの要素を取得
		const exportOptionMenu = document.querySelector(".ai1wm-accordion.ai1wm-expandable");
		// エクスポート先アコーディオンメニューを取得
		const exportButtonGroup = document.querySelector(".ai1wm-button-group.ai1wm-button-export");

		// オプション用アコーディオンメニューのスタイルを設定
		if (exportOptionMenu) {
			exportOptionMenu.classList.add("ai1wm-open");
		}

		// エクスポート先アコーディオンメニューのスタイルを設定
		if (exportButtonGroup) {
			exportButtonGroup.classList.add("ai1wm-open");
			const exportButtonGroupList = exportButtonGroup.querySelector("ul.ai1wm-export-providers");
			// エクスポート先リストのulタグのスタイルを設定
			if (exportButtonGroupList) {
				exportButtonGroupList.style.height = "auto";
				exportButtonGroupList.style.borderTop = "1px solid #27ae60";
			}
			// ハンバーガーメニューのスタイルを設定
			const exportButtonLines = exportButtonGroup.querySelector(".ai1mw-lines");
			if (exportButtonLines) {
				exportButtonLines.style.display = "none";
			}
		}

		// チェックするチェックボックスのIDリスト
		const checkboxesToCheck = ["ai1wm-no-spam-comments", "ai1wm-no-post-revisions", "ai1wm-no-media", "ai1wm-no-themes", "ai1wm-no-muplugins", "ai1wm-no-plugins", "ai1wm-no-email-replace", "ai1wm-no-inactive-themes", "ai1wm-no-inactive-plugins", "ai1wm-no-cache"];

		// 各チェックボックスをチェックする
		checkboxesToCheck.forEach((id) => {
			const checkbox = document.getElementById(id);
			if (checkbox) {
				checkbox.checked = true;
			}
		});
	}
});
