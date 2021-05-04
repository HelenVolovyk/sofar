/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/admin/product-images.js":
/*!**********************************************!*\
  !*** ./resources/js/admin/product-images.js ***!
  \**********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("var classes = {\n  wrapper: \".product-images-wrapper\",\n  addBtn: \".product-images-add\",\n  removeBtn: \".product-images-remove\",\n  row: \".product-images-row\"\n};\nvar htmlTemplate = \"\\n    <div class=\\\"row product-images-row\\\"\\n        style=\\\"width: 100%; margin: 32px auto 0;\\\">\\n        <div class=\\\"col-8\\\">\\n            <input type=\\\"file\\\" name=\\\"product_images[]\\\" />\\n        </div>\\n        <div class=\\\"col-4\\\">\\n            <button class=\\\"btn btn-danger product-images-remove \\\">Remove</button> \\n        </div>\\n    </div>\";\n$(document).on(\"click\", classes.addBtn, function (e) {\n  e.preventDefault();\n  $(classes.wrapper).append(htmlTemplate);\n});\n$(document).on(\"click\", classes.removeBtn, function (e) {\n  e.preventDefault();\n\n  if ($(this).hasClass(\"ajax\")) {\n    S.ajaxSetup({\n      headers: {\n        \"X-CSRF-TOKEN\": jQuery('meta[name=\"csrf-token\"]').attr(\"content\")\n      }\n    });\n    var route = $(this).data(\"route\");\n    var $btn = $(this);\n    $.ajax({\n      url: route,\n      type: \"DELETE\",\n      dataType: \"json\",\n      success: function success(data) {\n        var parent = $btn.parents(classes.row);\n        parent.html(data.message);\n        setTimeout(function (parent) {\n          parent.remove();\n        }, 2000, parent);\n      },\n      error: function error(data) {\n        console.log(\"Error:\", data);\n      }\n    });\n  } else {\n    var parent = $(this).parents(classes.row);\n\n    if (parent) {\n      parent.remove();\n    }\n  }\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvYWRtaW4vcHJvZHVjdC1pbWFnZXMuanM/NjU3YiJdLCJuYW1lcyI6WyJjbGFzc2VzIiwid3JhcHBlciIsImFkZEJ0biIsInJlbW92ZUJ0biIsInJvdyIsImh0bWxUZW1wbGF0ZSIsIiQiLCJkb2N1bWVudCIsIm9uIiwiZSIsInByZXZlbnREZWZhdWx0IiwiYXBwZW5kIiwiaGFzQ2xhc3MiLCJTIiwiYWpheFNldHVwIiwiaGVhZGVycyIsImpRdWVyeSIsImF0dHIiLCJyb3V0ZSIsImRhdGEiLCIkYnRuIiwiYWpheCIsInVybCIsInR5cGUiLCJkYXRhVHlwZSIsInN1Y2Nlc3MiLCJwYXJlbnQiLCJwYXJlbnRzIiwiaHRtbCIsIm1lc3NhZ2UiLCJzZXRUaW1lb3V0IiwicmVtb3ZlIiwiZXJyb3IiLCJjb25zb2xlIiwibG9nIl0sIm1hcHBpbmdzIjoiQUFBQSxJQUFNQSxPQUFPLEdBQUc7QUFDWkMsU0FBTyxFQUFFLHlCQURHO0FBRVpDLFFBQU0sRUFBRSxxQkFGSTtBQUdaQyxXQUFTLEVBQUUsd0JBSEM7QUFJWkMsS0FBRyxFQUFFO0FBSk8sQ0FBaEI7QUFNQSxJQUFNQyxZQUFZLHFXQUFsQjtBQVdBQyxDQUFDLENBQUNDLFFBQUQsQ0FBRCxDQUFZQyxFQUFaLENBQWUsT0FBZixFQUF3QlIsT0FBTyxDQUFDRSxNQUFoQyxFQUF3QyxVQUFTTyxDQUFULEVBQVk7QUFDaERBLEdBQUMsQ0FBQ0MsY0FBRjtBQUNBSixHQUFDLENBQUNOLE9BQU8sQ0FBQ0MsT0FBVCxDQUFELENBQW1CVSxNQUFuQixDQUEwQk4sWUFBMUI7QUFDSCxDQUhEO0FBS0FDLENBQUMsQ0FBQ0MsUUFBRCxDQUFELENBQVlDLEVBQVosQ0FBZSxPQUFmLEVBQXdCUixPQUFPLENBQUNHLFNBQWhDLEVBQTJDLFVBQVNNLENBQVQsRUFBWTtBQUNuREEsR0FBQyxDQUFDQyxjQUFGOztBQUVFLE1BQUlKLENBQUMsQ0FBQyxJQUFELENBQUQsQ0FBUU0sUUFBUixDQUFpQixNQUFqQixDQUFKLEVBQThCO0FBQzVCQyxLQUFDLENBQUNDLFNBQUYsQ0FBWTtBQUNSQyxhQUFPLEVBQUU7QUFDTCx3QkFBZ0JDLE1BQU0sQ0FBQyx5QkFBRCxDQUFOLENBQWtDQyxJQUFsQyxDQUF1QyxTQUF2QztBQURYO0FBREQsS0FBWjtBQU1BLFFBQUlDLEtBQUssR0FBS1osQ0FBQyxDQUFDLElBQUQsQ0FBRCxDQUFRYSxJQUFSLENBQWEsT0FBYixDQUFkO0FBQ0EsUUFBSUMsSUFBSSxHQUFNZCxDQUFDLENBQUMsSUFBRCxDQUFmO0FBRUFBLEtBQUMsQ0FBQ2UsSUFBRixDQUFPO0FBQ0hDLFNBQUcsRUFBRUosS0FERjtBQUVISyxVQUFJLEVBQUUsUUFGSDtBQUdIQyxjQUFRLEVBQUUsTUFIUDtBQUlIQyxhQUFPLEVBQUUsaUJBQVNOLElBQVQsRUFBZTtBQUNwQixZQUFJTyxNQUFNLEdBQUlOLElBQUksQ0FBQ08sT0FBTCxDQUFhM0IsT0FBTyxDQUFDSSxHQUFyQixDQUFkO0FBQ0FzQixjQUFNLENBQUNFLElBQVAsQ0FBWVQsSUFBSSxDQUFDVSxPQUFqQjtBQUVBQyxrQkFBVSxDQUFDLFVBQVNKLE1BQVQsRUFBaUI7QUFDMUJBLGdCQUFNLENBQUNLLE1BQVA7QUFDRCxTQUZTLEVBRVAsSUFGTyxFQUVETCxNQUZDLENBQVY7QUFHSCxPQVhFO0FBWUhNLFdBQUssRUFBRSxlQUFTYixJQUFULEVBQWU7QUFDbEJjLGVBQU8sQ0FBQ0MsR0FBUixDQUFZLFFBQVosRUFBc0JmLElBQXRCO0FBQ0g7QUFkRSxLQUFQO0FBZ0JILEdBMUJDLE1BMEJLO0FBQ0gsUUFBSU8sTUFBTSxHQUFHcEIsQ0FBQyxDQUFDLElBQUQsQ0FBRCxDQUFRcUIsT0FBUixDQUFnQjNCLE9BQU8sQ0FBQ0ksR0FBeEIsQ0FBYjs7QUFDQSxRQUFJc0IsTUFBSixFQUFZO0FBQ1JBLFlBQU0sQ0FBQ0ssTUFBUDtBQUNIO0FBQ0o7QUFDSixDQW5DRCIsImZpbGUiOiIuL3Jlc291cmNlcy9qcy9hZG1pbi9wcm9kdWN0LWltYWdlcy5qcy5qcyIsInNvdXJjZXNDb250ZW50IjpbImNvbnN0IGNsYXNzZXMgPSB7XG4gICAgd3JhcHBlcjogXCIucHJvZHVjdC1pbWFnZXMtd3JhcHBlclwiLFxuICAgIGFkZEJ0bjogXCIucHJvZHVjdC1pbWFnZXMtYWRkXCIsXG4gICAgcmVtb3ZlQnRuOiBcIi5wcm9kdWN0LWltYWdlcy1yZW1vdmVcIixcbiAgICByb3c6IFwiLnByb2R1Y3QtaW1hZ2VzLXJvd1wiXG59O1xuY29uc3QgaHRtbFRlbXBsYXRlID0gYFxuICAgIDxkaXYgY2xhc3M9XCJyb3cgcHJvZHVjdC1pbWFnZXMtcm93XCJcbiAgICAgICAgc3R5bGU9XCJ3aWR0aDogMTAwJTsgbWFyZ2luOiAzMnB4IGF1dG8gMDtcIj5cbiAgICAgICAgPGRpdiBjbGFzcz1cImNvbC04XCI+XG4gICAgICAgICAgICA8aW5wdXQgdHlwZT1cImZpbGVcIiBuYW1lPVwicHJvZHVjdF9pbWFnZXNbXVwiIC8+XG4gICAgICAgIDwvZGl2PlxuICAgICAgICA8ZGl2IGNsYXNzPVwiY29sLTRcIj5cbiAgICAgICAgICAgIDxidXR0b24gY2xhc3M9XCJidG4gYnRuLWRhbmdlciBwcm9kdWN0LWltYWdlcy1yZW1vdmUgXCI+UmVtb3ZlPC9idXR0b24+IFxuICAgICAgICA8L2Rpdj5cbiAgICA8L2Rpdj5gO1xuXG4kKGRvY3VtZW50KS5vbihcImNsaWNrXCIsIGNsYXNzZXMuYWRkQnRuLCBmdW5jdGlvbihlKSB7XG4gICAgZS5wcmV2ZW50RGVmYXVsdCgpO1xuICAgICQoY2xhc3Nlcy53cmFwcGVyKS5hcHBlbmQoaHRtbFRlbXBsYXRlKTtcbn0pO1xuXG4kKGRvY3VtZW50KS5vbihcImNsaWNrXCIsIGNsYXNzZXMucmVtb3ZlQnRuLCBmdW5jdGlvbihlKSB7XG4gICAgZS5wcmV2ZW50RGVmYXVsdCgpO1xuXG4gICAgICBpZiAoJCh0aGlzKS5oYXNDbGFzcyhcImFqYXhcIikpIHtcbiAgICAgICAgUy5hamF4U2V0dXAoe1xuICAgICAgICAgICAgaGVhZGVyczoge1xuICAgICAgICAgICAgICAgIFwiWC1DU1JGLVRPS0VOXCI6IGpRdWVyeSgnbWV0YVtuYW1lPVwiY3NyZi10b2tlblwiXScpLmF0dHIoXCJjb250ZW50XCIpXG4gICAgICAgICAgICB9XG4gICAgICAgIH0pO1xuXG4gICAgICAgIGxldCByb3V0ZSAgID0gJCh0aGlzKS5kYXRhKFwicm91dGVcIik7XG4gICAgICAgIGxldCAkYnRuICAgID0gJCh0aGlzKTtcblxuICAgICAgICAkLmFqYXgoe1xuICAgICAgICAgICAgdXJsOiByb3V0ZSxcbiAgICAgICAgICAgIHR5cGU6IFwiREVMRVRFXCIsXG4gICAgICAgICAgICBkYXRhVHlwZTogXCJqc29uXCIsXG4gICAgICAgICAgICBzdWNjZXNzOiBmdW5jdGlvbihkYXRhKSB7XG4gICAgICAgICAgICAgICAgbGV0IHBhcmVudCA9ICAkYnRuLnBhcmVudHMoY2xhc3Nlcy5yb3cpO1xuICAgICAgICAgICAgICAgIHBhcmVudC5odG1sKGRhdGEubWVzc2FnZSk7XG4gICAgICAgICAgICAgXG4gICAgICAgICAgICAgICAgc2V0VGltZW91dChmdW5jdGlvbihwYXJlbnQpIHtcbiAgICAgICAgICAgICAgICAgIHBhcmVudC5yZW1vdmUoKTtcbiAgICAgICAgICAgICAgICB9LCAyMDAwLCBwYXJlbnQpO1xuICAgICAgICAgICAgfSxcbiAgICAgICAgICAgIGVycm9yOiBmdW5jdGlvbihkYXRhKSB7XG4gICAgICAgICAgICAgICAgY29uc29sZS5sb2coXCJFcnJvcjpcIiwgZGF0YSk7XG4gICAgICAgICAgICB9XG4gICAgICAgIH0pO1xuICAgIH0gZWxzZSB7XG4gICAgICAgIGxldCBwYXJlbnQgPSAkKHRoaXMpLnBhcmVudHMoY2xhc3Nlcy5yb3cpO1xuICAgICAgICBpZiAocGFyZW50KSB7XG4gICAgICAgICAgICBwYXJlbnQucmVtb3ZlKCk7XG4gICAgICAgIH1cbiAgICB9XG59KTtcbiJdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/js/admin/product-images.js\n");

/***/ }),

/***/ 1:
/*!****************************************************!*\
  !*** multi ./resources/js/admin/product-images.js ***!
  \****************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /var/www/test.com/resources/js/admin/product-images.js */"./resources/js/admin/product-images.js");


/***/ })

/******/ });