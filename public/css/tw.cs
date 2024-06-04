/*
! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com
*/

/*
1. Prevent padding and border from affecting element width. (https://github.com/mozdevs/cssremedy/issues/4)
2. Allow adding a border to an element by just adding a border-width. (https://github.com/tailwindcss/tailwindcss/pull/116)
*/

*,
::before,
::after {
  box-sizing: border-box;
  /* 1 */
  border-width: 0;
  /* 2 */
  border-style: solid;
  /* 2 */
  border-color: #e5e7eb;
  /* 2 */
}

::before,
::after {
  --tw-content: '';
}

/*
1. Use a consistent sensible line-height in all browsers.
2. Prevent adjustments of font size after orientation changes in iOS.
3. Use a more readable tab size.
4. Use the user's configured `sans` font-family by default.
5. Use the user's configured `sans` font-feature-settings by default.
6. Use the user's configured `sans` font-variation-settings by default.
7. Disable tap highlights on iOS
*/

html,
:host {
  line-height: 1.5;
  /* 1 */
  -webkit-text-size-adjust: 100%;
  /* 2 */
  -moz-tab-size: 4;
  /* 3 */
  -o-tab-size: 4;
     tab-size: 4;
  /* 3 */
  font-family: Figtree, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  /* 4 */
  font-feature-settings: normal;
  /* 5 */
  font-variation-settings: normal;
  /* 6 */
  -webkit-tap-highlight-color: transparent;
  /* 7 */
}

/*
1. Remove the margin in all browsers.
2. Inherit line-height from `html` so users can set them as a class directly on the `html` element.
*/

body {
  margin: 0;
  /* 1 */
  line-height: inherit;
  /* 2 */
}

/*
1. Add the correct height in Firefox.
2. Correct the inheritance of border color in Firefox. (https://bugzilla.mozilla.org/show_bug.cgi?id=190655)
3. Ensure horizontal rules are visible by default.
*/

hr {
  height: 0;
  /* 1 */
  color: inherit;
  /* 2 */
  border-top-width: 1px;
  /* 3 */
}

/*
Add the correct text decoration in Chrome, Edge, and Safari.
*/

abbr:where([title]) {
  -webkit-text-decoration: underline dotted;
          text-decoration: underline dotted;
}

/*
Remove the default font size and weight for headings.
*/

h1,
h2,
h3,
h4,
h5,
h6 {
  font-size: inherit;
  font-weight: inherit;
}

/*
Reset links to optimize for opt-in styling instead of opt-out.
*/

a {
  color: inherit;
  text-decoration: inherit;
}

/*
Add the correct font weight in Edge and Safari.
*/

b,
strong {
  font-weight: bolder;
}

/*
1. Use the user's configured `mono` font-family by default.
2. Use the user's configured `mono` font-feature-settings by default.
3. Use the user's configured `mono` font-variation-settings by default.
4. Correct the odd `em` font sizing in all browsers.
*/

code,
kbd,
samp,
pre {
  font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
  /* 1 */
  font-feature-settings: normal;
  /* 2 */
  font-variation-settings: normal;
  /* 3 */
  font-size: 1em;
  /* 4 */
}

/*
Add the correct font size in all browsers.
*/

small {
  font-size: 80%;
}

/*
Prevent `sub` and `sup` elements from affecting the line height in all browsers.
*/

sub,
sup {
  font-size: 75%;
  line-height: 0;
  position: relative;
  vertical-align: baseline;
}

sub {
  bottom: -0.25em;
}

sup {
  top: -0.5em;
}

/*
1. Remove text indentation from table contents in Chrome and Safari. (https://bugs.chromium.org/p/chromium/issues/detail?id=999088, https://bugs.webkit.org/show_bug.cgi?id=201297)
2. Correct table border color inheritance in all Chrome and Safari. (https://bugs.chromium.org/p/chromium/issues/detail?id=935729, https://bugs.webkit.org/show_bug.cgi?id=195016)
3. Remove gaps between table borders by default.
*/

table {
  text-indent: 0;
  /* 1 */
  border-color: inherit;
  /* 2 */
  border-collapse: collapse;
  /* 3 */
}

/*
1. Change the font styles in all browsers.
2. Remove the margin in Firefox and Safari.
3. Remove default padding in all browsers.
*/

button,
input,
optgroup,
select,
textarea {
  font-family: inherit;
  /* 1 */
  font-feature-settings: inherit;
  /* 1 */
  font-variation-settings: inherit;
  /* 1 */
  font-size: 100%;
  /* 1 */
  font-weight: inherit;
  /* 1 */
  line-height: inherit;
  /* 1 */
  color: inherit;
  /* 1 */
  margin: 0;
  /* 2 */
  padding: 0;
  /* 3 */
}

/*
Remove the inheritance of text transform in Edge and Firefox.
*/

button,
select {
  text-transform: none;
}

/*
1. Correct the inability to style clickable types in iOS and Safari.
2. Remove default button styles.
*/

button,
[type='button'],
[type='reset'],
[type='submit'] {
  -webkit-appearance: button;
  /* 1 */
  background-color: transparent;
  /* 2 */
  background-image: none;
  /* 2 */
}

/*
Use the modern Firefox focus style for all focusable elements.
*/

:-moz-focusring {
  outline: auto;
}

/*
Remove the additional `:invalid` styles in Firefox. (https://github.com/mozilla/gecko-dev/blob/2f9eacd9d3d995c937b4251a5557d95d494c9be1/layout/style/res/forms.css#L728-L737)
*/

:-moz-ui-invalid {
  box-shadow: none;
}

/*
Add the correct vertical alignment in Chrome and Firefox.
*/

progress {
  vertical-align: baseline;
}

/*
Correct the cursor style of increment and decrement buttons in Safari.
*/

::-webkit-inner-spin-button,
::-webkit-outer-spin-button {
  height: auto;
}

/*
1. Correct the odd appearance in Chrome and Safari.
2. Correct the outline style in Safari.
*/

[type='search'] {
  -webkit-appearance: textfield;
  /* 1 */
  outline-offset: -2px;
  /* 2 */
}

/*
Remove the inner padding in Chrome and Safari on macOS.
*/

::-webkit-search-decoration {
  -webkit-appearance: none;
}

/*
1. Correct the inability to style clickable types in iOS and Safari.
2. Change font properties to `inherit` in Safari.
*/

::-webkit-file-upload-button {
  -webkit-appearance: button;
  /* 1 */
  font: inherit;
  /* 2 */
}

/*
Add the correct display in Chrome and Safari.
*/

summary {
  display: list-item;
}

/*
Removes the default spacing and border for appropriate elements.
*/

blockquote,
dl,
dd,
h1,
h2,
h3,
h4,
h5,
h6,
hr,
figure,
p,
pre {
  margin: 0;
}

fieldset {
  margin: 0;
  padding: 0;
}

legend {
  padding: 0;
}

ol,
ul,
menu {
  list-style: none;
  margin: 0;
  padding: 0;
}

/*
Reset default styling for dialogs.
*/

dialog {
  padding: 0;
}

/*
Prevent resizing textareas horizontally by default.
*/

textarea {
  resize: vertical;
}

/*
1. Reset the default placeholder opacity in Firefox. (https://github.com/tailwindlabs/tailwindcss/issues/3300)
2. Set the default placeholder color to the user's configured gray 400 color.
*/

input::-moz-placeholder, textarea::-moz-placeholder {
  opacity: 1;
  /* 1 */
  color: #9ca3af;
  /* 2 */
}

input::placeholder,
textarea::placeholder {
  opacity: 1;
  /* 1 */
  color: #9ca3af;
  /* 2 */
}

/*
Set the default cursor for buttons.
*/

button,
[role="button"] {
  cursor: pointer;
}

/*
Make sure disabled buttons don't get the pointer cursor.
*/

:disabled {
  cursor: default;
}

/*
1. Make replaced elements `display: block` by default. (https://github.com/mozdevs/cssremedy/issues/14)
2. Add `vertical-align: middle` to align replaced elements more sensibly by default. (https://github.com/jensimmons/cssremedy/issues/14#issuecomment-634934210)
   This can trigger a poorly considered lint error in some tools but is included by design.
*/

img,
svg,
video,
canvas,
audio,
iframe,
embed,
object {
  display: block;
  /* 1 */
  vertical-align: middle;
  /* 2 */
}

/*
Constrain images and videos to the parent width and preserve their intrinsic aspect ratio. (https://github.com/mozdevs/cssremedy/issues/14)
*/

img,
video {
  max-width: 100%;
  height: auto;
}

/* Make elements with the HTML hidden attribute stay hidden by default */

[hidden] {
  display: none;
}

[type='text'],input:where(:not([type])),[type='email'],[type='url'],[type='password'],[type='number'],[type='date'],[type='datetime-local'],[type='month'],[type='search'],[type='tel'],[type='time'],[type='week'],[multiple],textarea,select {
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  background-color: #fff;
  border-color: #6b7280;
  border-width: 1px;
  border-radius: 0px;
  padding-top: 0.5rem;
  padding-right: 0.75rem;
  padding-bottom: 0.5rem;
  padding-left: 0.75rem;
  font-size: 1rem;
  line-height: 1.5rem;
  --tw-shadow: 0 0 #0000;
}

[type='text']:focus, input:where(:not([type])):focus, [type='email']:focus, [type='url']:focus, [type='password']:focus, [type='number']:focus, [type='date']:focus, [type='datetime-local']:focus, [type='month']:focus, [type='search']:focus, [type='tel']:focus, [type='time']:focus, [type='week']:focus, [multiple]:focus, textarea:focus, select:focus {
  outline: 2px solid transparent;
  outline-offset: 2px;
  --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/);
  --tw-ring-offset-width: 0px;
  --tw-ring-offset-color: #fff;
  --tw-ring-color: #2563eb;
  --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
  --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
  box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow);
  border-color: #2563eb;
}

input::-moz-placeholder, textarea::-moz-placeholder {
  color: #6b7280;
  opacity: 1;
}

input::placeholder,textarea::placeholder {
  color: #6b7280;
  opacity: 1;
}

::-webkit-datetime-edit-fields-wrapper {
  padding: 0;
}

::-webkit-date-and-time-value {
  min-height: 1.5em;
  text-align: inherit;
}

::-webkit-datetime-edit {
  display: inline-flex;
}

::-webkit-datetime-edit,::-webkit-datetime-edit-year-field,::-webkit-datetime-edit-month-field,::-webkit-datetime-edit-day-field,::-webkit-datetime-edit-hour-field,::-webkit-datetime-edit-minute-field,::-webkit-datetime-edit-second-field,::-webkit-datetime-edit-millisecond-field,::-webkit-datetime-edit-meridiem-field {
  padding-top: 0;
  padding-bottom: 0;
}

select {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e");
  background-position: right 0.5rem center;
  background-repeat: no-repeat;
  background-size: 1.5em 1.5em;
  padding-right: 2.5rem;
  -webkit-print-color-adjust: exact;
          print-color-adjust: exact;
}

[multiple],[size]:where(select:not([size="1"])) {
  background-image: initial;
  background-position: initial;
  background-repeat: unset;
  background-size: initial;
  padding-right: 0.75rem;
  -webkit-print-color-adjust: unset;
          print-color-adjust: unset;
}

[type='checkbox'],[type='radio'] {
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  padding: 0;
  -webkit-print-color-adjust: exact;
          print-color-adjust: exact;
  display: inline-block;
  vertical-align: middle;
  background-origin: border-box;
  -webkit-user-select: none;
     -moz-user-select: none;
          user-select: none;
  flex-shrink: 0;
  height: 1rem;
  width: 1rem;
  color: #2563eb;
  background-color: #fff;
  border-color: #6b7280;
  border-width: 1px;
  --tw-shadow: 0 0 #0000;
}

[type='checkbox'] {
  border-radius: 0px;
}

[type='radio'] {
  border-radius: 100%;
}

[type='checkbox']:focus,[type='radio']:focus {
  outline: 2px solid transparent;
  outline-offset: 2px;
  --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/);
  --tw-ring-offset-width: 2px;
  --tw-ring-offset-color: #fff;
  --tw-ring-color: #2563eb;
  --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
  --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);
  box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow);
}

[type='checkbox']:checked,[type='radio']:checked {
  border-color: transparent;
  background-color: currentColor;
  background-size: 100% 100%;
  background-position: center;
  background-repeat: no-repeat;
}

[type='checkbox']:checked {
  background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='white' xmlns='http://www.w3.org/2000/svg'%3e%3cpath d='M12.207 4.793a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0l-2-2a1 1 0 011.414-1.414L6.5 9.086l4.293-4.293a1 1 0 011.414 0z'/%3e%3c/svg%3e");
}

@media (forced-colors: active)  {
  [type='checkbox']:checked {
    -webkit-appearance: auto;
       -moz-appearance: auto;
            appearance: auto;
  }
}

[type='radio']:checked {
  background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='white' xmlns='http://www.w3.org/2000/svg'%3e%3ccircle cx='8' cy='8' r='3'/%3e%3c/svg%3e");
}

@media (forced-colors: active)  {
  [type='radio']:checked {
    -webkit-appearance: auto;
       -moz-appearance: auto;
            appearance: auto;
  }
}

[type='checkbox']:checked:hover,[type='checkbox']:checked:focus,[type='radio']:checked:hover,[type='radio']:checked:focus {
  border-color: transparent;
  background-color: currentColor;
}

[type='checkbox']:indeterminate {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 16 16'%3e%3cpath stroke='white' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M4 8h8'/%3e%3c/svg%3e");
  border-color: transparent;
  background-color: currentColor;
  background-size: 100% 100%;
  background-position: center;
  background-repeat: no-repeat;
}

@media (forced-colors: active)  {
  [type='checkbox']:indeterminate {
    -webkit-appearance: auto;
       -moz-appearance: auto;
            appearance: auto;
  }
}

[type='checkbox']:indeterminate:hover,[type='checkbox']:indeterminate:focus {
  border-color: transparent;
  background-color: currentColor;
}

[type='file'] {
  background: unset;
  border-color: inherit;
  border-width: 0;
  border-radius: 0;
  padding: 0;
  font-size: unset;
  line-height: inherit;
}

[type='file']:focus {
  outline: 1px solid ButtonText;
  outline: 1px auto -webkit-focus-ring-color;
}

* {
  scrollbar-color: initial;
  scrollbar-width: initial;
}

*, ::before, ::after {
  --tw-border-spacing-x: 0;
  --tw-border-spacing-y: 0;
  --tw-translate-x: 0;
  --tw-translate-y: 0;
  --tw-rotate: 0;
  --tw-skew-x: 0;
  --tw-skew-y: 0;
  --tw-scale-x: 1;
  --tw-scale-y: 1;
  --tw-pan-x:  ;
  --tw-pan-y:  ;
  --tw-pinch-zoom:  ;
  --tw-scroll-snap-strictness: proximity;
  --tw-gradient-from-position:  ;
  --tw-gradient-via-position:  ;
  --tw-gradient-to-position:  ;
  --tw-ordinal:  ;
  --tw-slashed-zero:  ;
  --tw-numeric-figure:  ;
  --tw-numeric-spacing:  ;
  --tw-numeric-fraction:  ;
  --tw-ring-inset:  ;
  --tw-ring-offset-width: 0px;
  --tw-ring-offset-color: #fff;
  --tw-ring-color: rgb(59 130 246 / 0.5);
  --tw-ring-offset-shadow: 0 0 #0000;
  --tw-ring-shadow: 0 0 #0000;
  --tw-shadow: 0 0 #0000;
  --tw-shadow-colored: 0 0 #0000;
  --tw-blur:  ;
  --tw-brightness:  ;
  --tw-contrast:  ;
  --tw-grayscale:  ;
  --tw-hue-rotate:  ;
  --tw-invert:  ;
  --tw-saturate:  ;
  --tw-sepia:  ;
  --tw-drop-shadow:  ;
  --tw-backdrop-blur:  ;
  --tw-backdrop-brightness:  ;
  --tw-backdrop-contrast:  ;
  --tw-backdrop-grayscale:  ;
  --tw-backdrop-hue-rotate:  ;
  --tw-backdrop-invert:  ;
  --tw-backdrop-opacity:  ;
  --tw-backdrop-saturate:  ;
  --tw-backdrop-sepia:  ;
}

::backdrop {
  --tw-border-spacing-x: 0;
  --tw-border-spacing-y: 0;
  --tw-translate-x: 0;
  --tw-translate-y: 0;
  --tw-rotate: 0;
  --tw-skew-x: 0;
  --tw-skew-y: 0;
  --tw-scale-x: 1;
  --tw-scale-y: 1;
  --tw-pan-x:  ;
  --tw-pan-y:  ;
  --tw-pinch-zoom:  ;
  --tw-scroll-snap-strictness: proximity;
  --tw-gradient-from-position:  ;
  --tw-gradient-via-position:  ;
  --tw-gradient-to-position:  ;
  --tw-ordinal:  ;
  --tw-slashed-zero:  ;
  --tw-numeric-figure:  ;
  --tw-numeric-spacing:  ;
  --tw-numeric-fraction:  ;
  --tw-ring-inset:  ;
  --tw-ring-offset-width: 0px;
  --tw-ring-offset-color: #fff;
  --tw-ring-color: rgb(59 130 246 / 0.5);
  --tw-ring-offset-shadow: 0 0 #0000;
  --tw-ring-shadow: 0 0 #0000;
  --tw-shadow: 0 0 #0000;
  --tw-shadow-colored: 0 0 #0000;
  --tw-blur:  ;
  --tw-brightness:  ;
  --tw-contrast:  ;
  --tw-grayscale:  ;
  --tw-hue-rotate:  ;
  --tw-invert:  ;
  --tw-saturate:  ;
  --tw-sepia:  ;
  --tw-drop-shadow:  ;
  --tw-backdrop-blur:  ;
  --tw-backdrop-brightness:  ;
  --tw-backdrop-contrast:  ;
  --tw-backdrop-grayscale:  ;
  --tw-backdrop-hue-rotate:  ;
  --tw-backdrop-invert:  ;
  --tw-backdrop-opacity:  ;
  --tw-backdrop-saturate:  ;
  --tw-backdrop-sepia:  ;
}

.container {
  width: 100%;
}

@media (min-width: 640px) {
  .container {
    max-width: 640px;
  }
}

@media (min-width: 768px) {
  .container {
    max-width: 768px;
  }
}

@media (min-width: 1024px) {
  .container {
    max-width: 1024px;
  }
}

@media (min-width: 1280px) {
  .container {
    max-width: 1280px;
  }
}

@media (min-width: 1536px) {
  .container {
    max-width: 1536px;
  }
}

.custom-scroller{
  scrollbar-width: none;
  scrollbar-color:#635BFF rgba(255, 255, 255, 1);
  scroll-margin: 20px;
  scroll-behavior: smooth;
}

.hero-bg {
  background-image: linear-gradient(to right, var(--tw-gradient-stops));
  background-image: url('http://127.0.0.1:8000/images/hero-one.jpg');
  --tw-gradient-from: #6366f1 var(--tw-gradient-from-position);
  --tw-gradient-to: rgb(99 102 241 / 0) var(--tw-gradient-to-position);
  --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
  --tw-gradient-from-position: 70%;
  --tw-gradient-to: #0ea5e9 var(--tw-gradient-to-position);
  --tw-gradient-to-position: 30%;
}

.ageno-btn {
  width: 100%;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
  --tw-bg-opacity: 1;
  background-color: rgb(255 255 255 / var(--tw-bg-opacity));
  padding-left: 1.5rem;
  padding-right: 1.5rem;
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
  font-weight: 500;
  text-transform: capitalize;
  letter-spacing: 0.025em;
  --tw-text-opacity: 1;
  color: rgb(59 130 246 / var(--tw-text-opacity));
  transition-property: color, background-color, border-color, text-decoration-color, fill, stroke;
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  transition-duration: 300ms;
}

.ageno-btn:hover {
  --tw-bg-opacity: 1;
  background-color: rgb(59 130 246 / var(--tw-bg-opacity));
  --tw-text-opacity: 1;
  color: rgb(255 255 255 / var(--tw-text-opacity));
}

:is(.dark .ageno-btn) {
  --tw-bg-opacity: 1;
  background-color: rgb(31 41 55 / var(--tw-bg-opacity));
  --tw-text-opacity: 1;
  color: rgb(209 213 219 / var(--tw-text-opacity));
}

.ageno-btn.active {
  --tw-bg-opacity: 1;
  background-color: rgb(59 130 246 / var(--tw-bg-opacity));
  --tw-text-opacity: 1;
  color: rgb(255 255 255 / var(--tw-text-opacity));
}

:is(.dark .ageno-btn.active) {
  --tw-bg-opacity: 1;
  background-color: rgb(23 37 84 / var(--tw-bg-opacity));
}

.ageno-btn.active::after {
  position: absolute;
  top: auto;
  left: 48%;
  bottom: -10px;
  margin-left: -5px;
  margin-bottom: -1px;
  border-width: 1px;
  --tw-content: '';
  content: var(--tw-content);
  border-radius: 0 !important;
  background: 0 0 !important;
  border-color: transparent transparent #fff;
  border-width: 0 10px 10px;
  display: inline-block;
}

.sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  white-space: nowrap;
  border-width: 0;
}

.pointer-events-none {
  pointer-events: none;
}

.pointer-events-auto {
  pointer-events: auto;
}

.visible {
  visibility: visible;
}

.static {
  position: static;
}

.fixed {
  position: fixed;
}

.absolute {
  position: absolute;
}

.relative {
  position: relative;
}

.sticky {
  position: sticky;
}

.inset-0 {
  inset: 0px;
}

.inset-4 {
  inset: 1rem;
}

.inset-x-0 {
  left: 0px;
  right: 0px;
}

.inset-y-0 {
  top: 0px;
  bottom: 0px;
}

.-bottom-16 {
  bottom: -4rem;
}

.-left-16 {
  left: -4rem;
}

.-left-20 {
  left: -5rem;
}

.-top-1 {
  top: -0.25rem;
}

.-top-48 {
  top: -12rem;
}

.bottom-0 {
  bottom: 0px;
}

.end-0 {
  inset-inline-end: 0px;
}

.end-4 {
  inset-inline-end: 1rem;
}

.end-6 {
  inset-inline-end: 1.5rem;
}

.left-2\/4 {
  left: 50%;
}

.right-0 {
  right: 0px;
}

.right-2 {
  right: 0.5rem;
}

.start-0 {
  inset-inline-start: 0px;
}

.start-1\/2 {
  inset-inline-start: 50%;
}

.start-full {
  inset-inline-start: 100%;
}

.top-0 {
  top: 0px;
}

.top-1\/2 {
  top: 50%;
}

.top-2 {
  top: 0.5rem;
}

.top-2\/4 {
  top: 50%;
}

.top-4 {
  top: 1rem;
}

.top-6 {
  top: 1.5rem;
}

.-z-\[1\] {
  z-index: -1;
}

.z-0 {
  z-index: 0;
}

.z-10 {
  z-index: 10;
}

.z-20 {
  z-index: 20;
}

.z-30 {
  z-index: 30;
}

.z-40 {
  z-index: 40;
}

.z-50 {
  z-index: 50;
}

.z-\[1\] {
  z-index: 1;
}

.z-\[48\] {
  z-index: 48;
}

.z-\[60\] {
  z-index: 60;
}

.col-\[--col-span-default\] {
  grid-column: var(--col-span-default);
}

.col-span-1 {
  grid-column: span 1 / span 1;
}

.col-span-2 {
  grid-column: span 2 / span 2;
}

.col-span-6 {
  grid-column: span 6 / span 6;
}

.col-span-full {
  grid-column: 1 / -1;
}

.col-start-\[--col-start-default\] {
  grid-column-start: var(--col-start-default);
}

.\!row-span-1 {
  grid-row: span 1 / span 1 !important;
}

.row-start-2 {
  grid-row-start: 2;
}

.-m-0 {
  margin: -0px;
}

.-m-0\.5 {
  margin: -0.125rem;
}

.-m-1 {
  margin: -0.25rem;
}

.-m-1\.5 {
  margin: -0.375rem;
}

.-m-2 {
  margin: -0.5rem;
}

.-m-2\.5 {
  margin: -0.625rem;
}

.-m-3 {
  margin: -0.75rem;
}

.-m-3\.5 {
  margin: -0.875rem;
}

.m-0 {
  margin: 0px;
}

.m-1 {
  margin: 0.25rem;
}

.m-auto {
  margin: auto;
}

.-mx-2 {
  margin-left: -0.5rem;
  margin-right: -0.5rem;
}

.-mx-3 {
  margin-left: -0.75rem;
  margin-right: -0.75rem;
}

.-mx-4 {
  margin-left: -1rem;
  margin-right: -1rem;
}

.mx-3 {
  margin-left: 0.75rem;
  margin-right: 0.75rem;
}

.mx-auto {
  margin-left: auto;
  margin-right: auto;
}

.my-16 {
  margin-top: 4rem;
  margin-bottom: 4rem;
}

.-mb-px {
  margin-bottom: -1px;
}

.-me-2 {
  margin-inline-end: -0.5rem;
}

.-ml-px {
  margin-left: -1px;
}

.-ms-1 {
  margin-inline-start: -0.25rem;
}

.-mt-px {
  margin-top: -1px;
}

.mb-1 {
  margin-bottom: 0.25rem;
}

.mb-1\.5 {
  margin-bottom: 0.375rem;
}

.mb-10 {
  margin-bottom: 2.5rem;
}

.mb-2 {
  margin-bottom: 0.5rem;
}

.mb-3 {
  margin-bottom: 0.75rem;
}

.mb-4 {
  margin-bottom: 1rem;
}

.mb-5 {
  margin-bottom: 1.25rem;
}

.mb-6 {
  margin-bottom: 1.5rem;
}

.me-2 {
  margin-inline-end: 0.5rem;
}

.me-3 {
  margin-inline-end: 0.75rem;
}

.me-5 {
  margin-inline-end: 1.25rem;
}

.ml-1 {
  margin-left: 0.25rem;
}

.ml-12 {
  margin-left: 3rem;
}

.ml-2 {
  margin-left: 0.5rem;
}

.ml-3 {
  margin-left: 0.75rem;
}

.ml-4 {
  margin-left: 1rem;
}

.mr-2 {
  margin-right: 0.5rem;
}

.ms-1 {
  margin-inline-start: 0.25rem;
}

.ms-2 {
  margin-inline-start: 0.5rem;
}

.ms-3 {
  margin-inline-start: 0.75rem;
}

.ms-4 {
  margin-inline-start: 1rem;
}

.ms-auto {
  margin-inline-start: auto;
}

.mt-0 {
  margin-top: 0px;
}

.mt-0\.5 {
  margin-top: 0.125rem;
}

.mt-1 {
  margin-top: 0.25rem;
}

.mt-1\.5 {
  margin-top: 0.375rem;
}

.mt-10 {
  margin-top: 2.5rem;
}

.mt-2 {
  margin-top: 0.5rem;
}

.mt-3 {
  margin-top: 0.75rem;
}

.mt-4 {
  margin-top: 1rem;
}

.mt-5 {
  margin-top: 1.25rem;
}

.mt-6 {
  margin-top: 1.5rem;
}

.mt-7 {
  margin-top: 1.75rem;
}

.mt-8 {
  margin-top: 2rem;
}

.mt-auto {
  margin-top: auto;
}

.mt-px {
  margin-top: 1px;
}

.block {
  display: block;
}

.inline-block {
  display: inline-block;
}

.inline {
  display: inline;
}

.flex {
  display: flex;
}

.inline-flex {
  display: inline-flex;
}

.table {
  display: table;
}

.grid {
  display: grid;
}

.inline-grid {
  display: inline-grid;
}

.\!hidden {
  display: none !important;
}

.hidden {
  display: none;
}

.aspect-video {
  aspect-ratio: 16 / 9;
}

.size-10 {
  width: 2.5rem;
  height: 2.5rem;
}

.size-12 {
  width: 3rem;
  height: 3rem;
}

.size-14 {
  width: 3.5rem;
  height: 3.5rem;
}

.size-16 {
  width: 4rem;
  height: 4rem;
}

.size-2 {
  width: 0.5rem;
  height: 0.5rem;
}

.size-2\.5 {
  width: 0.625rem;
  height: 0.625rem;
}

.size-4 {
  width: 1rem;
  height: 1rem;
}

.size-5 {
  width: 1.25rem;
  height: 1.25rem;
}

.size-6 {
  width: 1.5rem;
  height: 1.5rem;
}

.size-60 {
  width: 15rem;
  height: 15rem;
}

.size-8 {
  width: 2rem;
  height: 2rem;
}

.size-9 {
  width: 2.25rem;
  height: 2.25rem;
}

.h-10 {
  height: 2.5rem;
}

.h-11 {
  height: 2.75rem;
}

.h-12 {
  height: 3rem;
}

.h-14 {
  height: 3.5rem;
}

.h-16 {
  height: 4rem;
}

.h-20 {
  height: 5rem;
}

.h-3 {
  height: 0.75rem;
}

.h-3\.5 {
  height: 0.875rem;
}

.h-32 {
  height: 8rem;
}

.h-4 {
  height: 1rem;
}

.h-40 {
  height: 10rem;
}

.h-5 {
  height: 1.25rem;
}

.h-52 {
  height: 13rem;
}

.h-6 {
  height: 1.5rem;
}

.h-7 {
  height: 1.75rem;
}

.h-8 {
  height: 2rem;
}

.h-9 {
  height: 2.25rem;
}

.h-96 {
  height: 24rem;
}

.h-\[100dvh\] {
  height: 100dvh;
}

.h-\[1080px\] {
  height: 1080px;
}

.h-\[2\.375rem\] {
  height: 2.375rem;
}

.h-\[230px\] {
  height: 230px;
}

.h-\[300px\] {
  height: 300px;
}

.h-\[340px\] {
  height: 340px;
}

.h-\[575px\] {
  height: 575px;
}

.h-\[600px\] {
  height: 600px;
}

.h-\[840px\] {
  height: 840px;
}

.h-auto {
  height: auto;
}

.h-dvh {
  height: 100dvh;
}

.h-full {
  height: 100%;
}

.h-screen {
  height: 100vh;
}

.min-h-full {
  min-height: 100%;
}

.min-h-screen {
  min-height: 100vh;
}

.w-10 {
  width: 2.5rem;
}

.w-11 {
  width: 2.75rem;
}

.w-11\/12 {
  width: 91.666667%;
}

.w-14 {
  width: 3.5rem;
}

.w-16 {
  width: 4rem;
}

.w-2\/3 {
  width: 66.666667%;
}

.w-20 {
  width: 5rem;
}

.w-28 {
  width: 7rem;
}

.w-3 {
  width: 0.75rem;
}

.w-3\.5 {
  width: 0.875rem;
}

.w-3\/4 {
  width: 75%;
}

.w-4 {
  width: 1rem;
}

.w-40 {
  width: 10rem;
}

.w-48 {
  width: 12rem;
}

.w-5 {
  width: 1.25rem;
}

.w-6 {
  width: 1.5rem;
}

.w-7 {
  width: 1.75rem;
}

.w-8 {
  width: 2rem;
}

.w-80 {
  width: 20rem;
}

.w-9 {
  width: 2.25rem;
}

.w-\[100px\] {
  width: 100px;
}

.w-\[1036px\] {
  width: 1036px;
}

.w-\[1080px\] {
  width: 1080px;
}

.w-\[15\%\] {
  width: 15%;
}

.w-\[2\.375rem\] {
  width: 2.375rem;
}

.w-\[260px\] {
  width: 260px;
}

.w-\[270px\] {
  width: 270px;
}

.w-\[3\.25rem\] {
  width: 3.25rem;
}

.w-\[340px\] {
  width: 340px;
}

.w-\[575px\] {
  width: 575px;
}

.w-\[577px\] {
  width: 577px;
}

.w-\[840px\] {
  width: 840px;
}

.w-\[calc\(100\%\+8rem\)\] {
  width: calc(100% + 8rem);
}

.w-auto {
  width: auto;
}

.w-full {
  width: 100%;
}

.w-max {
  width: -moz-max-content;
  width: max-content;
}

.min-w-0 {
  min-width: 0px;
}

.min-w-14 {
  min-width: 3.5rem;
}

.min-w-60 {
  min-width: 15rem;
}

.min-w-72 {
  min-width: 18rem;
}

.max-w-2xl {
  max-width: 42rem;
}

.max-w-3xl {
  max-width: 48rem;
}

.max-w-4xl {
  max-width: 56rem;
}

.max-w-5xl {
  max-width: 64rem;
}

.max-w-6xl {
  max-width: 72rem;
}

.max-w-7xl {
  max-width: 80rem;
}

.max-w-\[800px\] {
  max-width: 800px;
}

.max-w-\[85rem\] {
  max-width: 85rem;
}

.max-w-\[877px\] {
  max-width: 877px;
}

.max-w-fit {
  max-width: -moz-fit-content;
  max-width: fit-content;
}

.max-w-full {
  max-width: 100%;
}

.max-w-lg {
  max-width: 32rem;
}

.max-w-max {
  max-width: -moz-max-content;
  max-width: max-content;
}

.max-w-md {
  max-width: 28rem;
}

.max-w-min {
  max-width: -moz-min-content;
  max-width: min-content;
}

.max-w-prose {
  max-width: 65ch;
}

.max-w-screen-2xl {
  max-width: 1536px;
}

.max-w-screen-lg {
  max-width: 1024px;
}

.max-w-screen-md {
  max-width: 768px;
}

.max-w-screen-sm {
  max-width: 640px;
}

.max-w-screen-xl {
  max-width: 1280px;
}

.max-w-sm {
  max-width: 24rem;
}

.max-w-xl {
  max-width: 36rem;
}

.max-w-xs {
  max-width: 20rem;
}

.flex-1 {
  flex: 1 1 0%;
}

.flex-\[1_0_0\%\] {
  flex: 1 0 0%;
}

.flex-none {
  flex: none;
}

.flex-shrink-0 {
  flex-shrink: 0;
}

.shrink-0 {
  flex-shrink: 0;
}

.flex-grow {
  flex-grow: 1;
}

.grow {
  flex-grow: 1;
}

.basis-full {
  flex-basis: 100%;
}

.origin-top {
  transform-origin: top;
}

.-translate-x-1\/2 {
  --tw-translate-x: -50%;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.-translate-x-2\/4 {
  --tw-translate-x: -50%;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.-translate-x-32 {
  --tw-translate-x: -8rem;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.-translate-x-full {
  --tw-translate-x: -100%;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.-translate-y-1\/2 {
  --tw-translate-y: -50%;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.-translate-y-12 {
  --tw-translate-y: -3rem;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.-translate-y-2\/4 {
  --tw-translate-y: -50%;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.-translate-y-20 {
  --tw-translate-y: -5rem;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.translate-x-0 {
  --tw-translate-x: 0px;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.translate-x-20 {
  --tw-translate-x: 5rem;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.translate-x-full {
  --tw-translate-x: 100%;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.translate-y-0 {
  --tw-translate-y: 0px;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.translate-y-10 {
  --tw-translate-y: 2.5rem;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.translate-y-32 {
  --tw-translate-y: 8rem;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.translate-y-4 {
  --tw-translate-y: 1rem;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.scale-100 {
  --tw-scale-x: 1;
  --tw-scale-y: 1;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.scale-95 {
  --tw-scale-x: .95;
  --tw-scale-y: .95;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.transform {
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

@keyframes bounce {
  0%, 100% {
    transform: translateY(-25%);
    animation-timing-function: cubic-bezier(0.8,0,1,1);
  }

  50% {
    transform: none;
    animation-timing-function: cubic-bezier(0,0,0.2,1);
  }
}

.animate-bounce {
  animation: bounce 1s infinite;
}

@keyframes spin {
  to {
    transform: rotate(360deg);
  }
}

.animate-spin {
  animation: spin 1s linear infinite;
}

.cursor-default {
  cursor: default;
}

.cursor-pointer {
  cursor: pointer;
}

.cursor-wait {
  cursor: wait;
}

.select-none {
  -webkit-user-select: none;
     -moz-user-select: none;
          user-select: none;
}

.resize {
  resize: both;
}

.appearance-none {
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
}

.columns-\[--cols-default\] {
  -moz-columns: var(--cols-default);
       columns: var(--cols-default);
}

.auto-cols-fr {
  grid-auto-columns: minmax(0, 1fr);
}

.grid-flow-col {
  grid-auto-flow: column;
}

.grid-cols-1 {
  grid-template-columns: repeat(1, minmax(0, 1fr));
}

.grid-cols-2 {
  grid-template-columns: repeat(2, minmax(0, 1fr));
}

.grid-cols-6 {
  grid-template-columns: repeat(6, minmax(0, 1fr));
}

.grid-cols-\[--cols-default\] {
  grid-template-columns: var(--cols-default);
}

.grid-cols-\[repeat\(auto-fit\2c minmax\(0\2c 1fr\)\)\] {
  grid-template-columns: repeat(auto-fit,minmax(0,1fr));
}

.grid-rows-\[1fr_auto_1fr\] {
  grid-template-rows: 1fr auto 1fr;
}

.\!flex-row {
  flex-direction: row !important;
}

.flex-row {
  flex-direction: row;
}

.flex-row-reverse {
  flex-direction: row-reverse;
}

.flex-col {
  flex-direction: column;
}

.flex-col-reverse {
  flex-direction: column-reverse;
}

.flex-wrap {
  flex-wrap: wrap;
}

.place-items-center {
  place-items: center;
}

.items-start {
  align-items: flex-start;
}

.items-end {
  align-items: flex-end;
}

.items-center {
  align-items: center;
}

.items-stretch {
  align-items: stretch;
}

.justify-start {
  justify-content: flex-start;
}

.justify-end {
  justify-content: flex-end;
}

.justify-center {
  justify-content: center;
}

.justify-between {
  justify-content: space-between;
}

.justify-items-center {
  justify-items: center;
}

.gap-1 {
  gap: 0.25rem;
}

.gap-1\.5 {
  gap: 0.375rem;
}

.gap-10 {
  gap: 2.5rem;
}

.gap-12 {
  gap: 3rem;
}

.gap-2 {
  gap: 0.5rem;
}

.gap-3 {
  gap: 0.75rem;
}

.gap-4 {
  gap: 1rem;
}

.gap-6 {
  gap: 1.5rem;
}

.gap-8 {
  gap: 2rem;
}

.gap-x-0 {
  -moz-column-gap: 0px;
       column-gap: 0px;
}

.gap-x-1 {
  -moz-column-gap: 0.25rem;
       column-gap: 0.25rem;
}

.gap-x-1\.5 {
  -moz-column-gap: 0.375rem;
       column-gap: 0.375rem;
}

.gap-x-10 {
  -moz-column-gap: 2.5rem;
       column-gap: 2.5rem;
}

.gap-x-2 {
  -moz-column-gap: 0.5rem;
       column-gap: 0.5rem;
}

.gap-x-3 {
  -moz-column-gap: 0.75rem;
       column-gap: 0.75rem;
}

.gap-x-3\.5 {
  -moz-column-gap: 0.875rem;
       column-gap: 0.875rem;
}

.gap-x-4 {
  -moz-column-gap: 1rem;
       column-gap: 1rem;
}

.gap-x-5 {
  -moz-column-gap: 1.25rem;
       column-gap: 1.25rem;
}

.gap-x-6 {
  -moz-column-gap: 1.5rem;
       column-gap: 1.5rem;
}

.gap-y-1 {
  row-gap: 0.25rem;
}

.gap-y-10 {
  row-gap: 2.5rem;
}

.gap-y-2 {
  row-gap: 0.5rem;
}

.gap-y-3 {
  row-gap: 0.75rem;
}

.gap-y-4 {
  row-gap: 1rem;
}

.gap-y-6 {
  row-gap: 1.5rem;
}

.space-x-2 > :not([hidden]) ~ :not([hidden]) {
  --tw-space-x-reverse: 0;
  margin-right: calc(0.5rem * var(--tw-space-x-reverse));
  margin-left: calc(0.5rem * calc(1 - var(--tw-space-x-reverse)));
}

.space-x-4 > :not([hidden]) ~ :not([hidden]) {
  --tw-space-x-reverse: 0;
  margin-right: calc(1rem * var(--tw-space-x-reverse));
  margin-left: calc(1rem * calc(1 - var(--tw-space-x-reverse)));
}

.space-x-8 > :not([hidden]) ~ :not([hidden]) {
  --tw-space-x-reverse: 0;
  margin-right: calc(2rem * var(--tw-space-x-reverse));
  margin-left: calc(2rem * calc(1 - var(--tw-space-x-reverse)));
}

.space-y-1 > :not([hidden]) ~ :not([hidden]) {
  --tw-space-y-reverse: 0;
  margin-top: calc(0.25rem * calc(1 - var(--tw-space-y-reverse)));
  margin-bottom: calc(0.25rem * var(--tw-space-y-reverse));
}

.space-y-1\.5 > :not([hidden]) ~ :not([hidden]) {
  --tw-space-y-reverse: 0;
  margin-top: calc(0.375rem * calc(1 - var(--tw-space-y-reverse)));
  margin-bottom: calc(0.375rem * var(--tw-space-y-reverse));
}

.space-y-2 > :not([hidden]) ~ :not([hidden]) {
  --tw-space-y-reverse: 0;
  margin-top: calc(0.5rem * calc(1 - var(--tw-space-y-reverse)));
  margin-bottom: calc(0.5rem * var(--tw-space-y-reverse));
}

.space-y-2\.5 > :not([hidden]) ~ :not([hidden]) {
  --tw-space-y-reverse: 0;
  margin-top: calc(0.625rem * calc(1 - var(--tw-space-y-reverse)));
  margin-bottom: calc(0.625rem * var(--tw-space-y-reverse));
}

.space-y-3 > :not([hidden]) ~ :not([hidden]) {
  --tw-space-y-reverse: 0;
  margin-top: calc(0.75rem * calc(1 - var(--tw-space-y-reverse)));
  margin-bottom: calc(0.75rem * var(--tw-space-y-reverse));
}

.space-y-4 > :not([hidden]) ~ :not([hidden]) {
  --tw-space-y-reverse: 0;
  margin-top: calc(1rem * calc(1 - var(--tw-space-y-reverse)));
  margin-bottom: calc(1rem * var(--tw-space-y-reverse));
}

.space-y-6 > :not([hidden]) ~ :not([hidden]) {
  --tw-space-y-reverse: 0;
  margin-top: calc(1.5rem * calc(1 - var(--tw-space-y-reverse)));
  margin-bottom: calc(1.5rem * var(--tw-space-y-reverse));
}

.divide-x > :not([hidden]) ~ :not([hidden]) {
  --tw-divide-x-reverse: 0;
  border-right-width: calc(1px * var(--tw-divide-x-reverse));
  border-left-width: calc(1px * calc(1 - var(--tw-divide-x-reverse)));
}

.divide-y > :not([hidden]) ~ :not([hidden]) {
  --tw-divide-y-reverse: 0;
  border-top-width: calc(1px * calc(1 - var(--tw-divide-y-reverse)));
  border-bottom-width: calc(1px * var(--tw-divide-y-reverse));
}

.divide-gray-200 > :not([hidden]) ~ :not([hidden]) {
  --tw-divide-opacity: 1;
  border-color: rgb(229 231 235 / var(--tw-divide-opacity));
}

.self-center {
  align-self: center;
}

.overflow-hidden {
  overflow: hidden;
}

.overflow-visible {
  overflow: visible;
}

.overflow-x-auto {
  overflow-x: auto;
}

.overflow-y-auto {
  overflow-y: auto;
}

.overflow-y-hidden {
  overflow-y: hidden;
}

.truncate {
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}

.whitespace-nowrap {
  white-space: nowrap;
}

.rounded {
  border-radius: 0.25rem;
}

.rounded-2xl {
  border-radius: 1rem;
}

.rounded-3xl {
  border-radius: 1.5rem;
}

.rounded-\[10px\] {
  border-radius: 10px;
}

.rounded-full {
  border-radius: 9999px;
}

.rounded-lg {
  border-radius: 0.5rem;
}

.rounded-md {
  border-radius: 0.375rem;
}

.rounded-sm {
  border-radius: 0.125rem;
}

.rounded-xl {
  border-radius: 0.75rem;
}

.rounded-b-xl {
  border-bottom-right-radius: 0.75rem;
  border-bottom-left-radius: 0.75rem;
}

.rounded-l {
  border-top-left-radius: 0.25rem;
  border-bottom-left-radius: 0.25rem;
}

.rounded-l-md {
  border-top-left-radius: 0.375rem;
  border-bottom-left-radius: 0.375rem;
}

.rounded-r {
  border-top-right-radius: 0.25rem;
  border-bottom-right-radius: 0.25rem;
}

.rounded-r-md {
  border-top-right-radius: 0.375rem;
  border-bottom-right-radius: 0.375rem;
}

.rounded-t-lg {
  border-top-left-radius: 0.5rem;
  border-top-right-radius: 0.5rem;
}

.rounded-t-xl {
  border-top-left-radius: 0.75rem;
  border-top-right-radius: 0.75rem;
}

.rounded-bl-md {
  border-bottom-left-radius: 0.375rem;
}

.rounded-bl-xl {
  border-bottom-left-radius: 0.75rem;
}

.rounded-br-md {
  border-bottom-right-radius: 0.375rem;
}

.rounded-br-xl {
  border-bottom-right-radius: 0.75rem;
}

.rounded-ee-xl {
  border-end-end-radius: 0.75rem;
}

.rounded-es-xl {
  border-end-start-radius: 0.75rem;
}

.rounded-tl-md {
  border-top-left-radius: 0.375rem;
}

.rounded-tr-md {
  border-top-right-radius: 0.375rem;
}

.border {
  border-width: 1px;
}

.border-2 {
  border-width: 2px;
}

.border-y {
  border-top-width: 1px;
  border-bottom-width: 1px;
}

.border-b {
  border-bottom-width: 1px;
}

.border-b-2 {
  border-bottom-width: 2px;
}

.border-e {
  border-inline-end-width: 1px;
}

.border-l-4 {
  border-left-width: 4px;
}

.border-r {
  border-right-width: 1px;
}

.border-s {
  border-inline-start-width: 1px;
}

.border-t {
  border-top-width: 1px;
}

.border-t-\[0\.5px\] {
  border-top-width: 0.5px;
}

.border-dashed {
  border-style: dashed;
}

.border-none {
  border-style: none;
}

.border-blue-600 {
  --tw-border-opacity: 1;
  border-color: rgb(37 99 235 / var(--tw-border-opacity));
}

.border-gray-100 {
  --tw-border-opacity: 1;
  border-color: rgb(243 244 246 / var(--tw-border-opacity));
}

.border-gray-200 {
  --tw-border-opacity: 1;
  border-color: rgb(229 231 235 / var(--tw-border-opacity));
}

.border-gray-300 {
  --tw-border-opacity: 1;
  border-color: rgb(209 213 219 / var(--tw-border-opacity));
}

.border-gray-300\/50 {
  border-color: rgb(209 213 219 / 0.5);
}

.border-gray-400 {
  --tw-border-opacity: 1;
  border-color: rgb(156 163 175 / var(--tw-border-opacity));
}

.border-gray-700 {
  --tw-border-opacity: 1;
  border-color: rgb(55 65 81 / var(--tw-border-opacity));
}

.border-indigo-400 {
  --tw-border-opacity: 1;
  border-color: rgb(129 140 248 / var(--tw-border-opacity));
}

.border-transparent {
  border-color: transparent;
}

.border-violet-200 {
  --tw-border-opacity: 1;
  border-color: rgb(221 214 254 / var(--tw-border-opacity));
}

.border-violet-600 {
  --tw-border-opacity: 1;
  border-color: rgb(124 58 237 / var(--tw-border-opacity));
}

.border-violet-900 {
  --tw-border-opacity: 1;
  border-color: rgb(76 29 149 / var(--tw-border-opacity));
}

.bg-\[\#FF2D20\]\/10 {
  background-color: rgb(255 45 32 / 0.1);
}

.bg-ageno {
  --tw-bg-opacity: 1;
  background-color: rgb(59 130 246 / var(--tw-bg-opacity));
}

.bg-ageno-2 {
  --tw-bg-opacity: 1;
  background-color: rgb(37 99 235 / var(--tw-bg-opacity));
}

.bg-amber-500 {
  --tw-bg-opacity: 1;
  background-color: rgb(245 158 11 / var(--tw-bg-opacity));
}

.bg-blue-100 {
  --tw-bg-opacity: 1;
  background-color: rgb(219 234 254 / var(--tw-bg-opacity));
}

.bg-blue-100\/80 {
  background-color: rgb(219 234 254 / 0.8);
}

.bg-blue-400\/5 {
  background-color: rgb(96 165 250 / 0.05);
}

.bg-blue-500 {
  --tw-bg-opacity: 1;
  background-color: rgb(59 130 246 / var(--tw-bg-opacity));
}

.bg-blue-600 {
  --tw-bg-opacity: 1;
  background-color: rgb(37 99 235 / var(--tw-bg-opacity));
}

.bg-gray-100 {
  --tw-bg-opacity: 1;
  background-color: rgb(243 244 246 / var(--tw-bg-opacity));
}

.bg-gray-200 {
  --tw-bg-opacity: 1;
  background-color: rgb(229 231 235 / var(--tw-bg-opacity));
}

.bg-gray-300 {
  --tw-bg-opacity: 1;
  background-color: rgb(209 213 219 / var(--tw-bg-opacity));
}

.bg-gray-50 {
  --tw-bg-opacity: 1;
  background-color: rgb(249 250 251 / var(--tw-bg-opacity));
}

.bg-gray-500 {
  --tw-bg-opacity: 1;
  background-color: rgb(107 114 128 / var(--tw-bg-opacity));
}

.bg-gray-500\/20 {
  background-color: rgb(107 114 128 / 0.2);
}

.bg-gray-800 {
  --tw-bg-opacity: 1;
  background-color: rgb(31 41 55 / var(--tw-bg-opacity));
}

.bg-gray-950\/50 {
  background-color: rgb(3 7 18 / 0.5);
}

.bg-indigo-50 {
  --tw-bg-opacity: 1;
  background-color: rgb(238 242 255 / var(--tw-bg-opacity));
}

.bg-purple-200 {
  --tw-bg-opacity: 1;
  background-color: rgb(233 213 255 / var(--tw-bg-opacity));
}

.bg-red-500 {
  --tw-bg-opacity: 1;
  background-color: rgb(239 68 68 / var(--tw-bg-opacity));
}

.bg-red-600 {
  --tw-bg-opacity: 1;
  background-color: rgb(220 38 38 / var(--tw-bg-opacity));
}

.bg-slate-200 {
  --tw-bg-opacity: 1;
  background-color: rgb(226 232 240 / var(--tw-bg-opacity));
}

.bg-slate-900 {
  --tw-bg-opacity: 1;
  background-color: rgb(15 23 42 / var(--tw-bg-opacity));
}

.bg-violet-100 {
  --tw-bg-opacity: 1;
  background-color: rgb(237 233 254 / var(--tw-bg-opacity));
}

.bg-violet-600 {
  --tw-bg-opacity: 1;
  background-color: rgb(124 58 237 / var(--tw-bg-opacity));
}

.bg-white {
  --tw-bg-opacity: 1;
  background-color: rgb(255 255 255 / var(--tw-bg-opacity));
}

.bg-white\/0 {
  background-color: rgb(255 255 255 / 0);
}

.bg-white\/60 {
  background-color: rgb(255 255 255 / 0.6);
}

.bg-\[url\(\'https\:\/\/preline\.co\/assets\/svg\/examples\/abstract-1\.svg\'\)\] {
  background-image: url('https://preline.co/assets/svg/examples/abstract-1.svg');
}

.bg-gradient-to-b {
  background-image: linear-gradient(to bottom, var(--tw-gradient-stops));
}

.bg-gradient-to-r {
  background-image: linear-gradient(to right, var(--tw-gradient-stops));
}

.from-transparent {
  --tw-gradient-from: transparent var(--tw-gradient-from-position);
  --tw-gradient-to: rgb(0 0 0 / 0) var(--tw-gradient-to-position);
  --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
}

.from-violet-600 {
  --tw-gradient-from: #7c3aed var(--tw-gradient-from-position);
  --tw-gradient-to: rgb(124 58 237 / 0) var(--tw-gradient-to-position);
  --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
}

.via-white {
  --tw-gradient-to: rgb(255 255 255 / 0)  var(--tw-gradient-to-position);
  --tw-gradient-stops: var(--tw-gradient-from), #fff var(--tw-gradient-via-position), var(--tw-gradient-to);
}

.to-fuchsia-700 {
  --tw-gradient-to: #a21caf var(--tw-gradient-to-position);
}

.to-white {
  --tw-gradient-to: #fff var(--tw-gradient-to-position);
}

.to-zinc-900 {
  --tw-gradient-to: #18181b var(--tw-gradient-to-position);
}

.bg-contain {
  background-size: contain;
}

.bg-cover {
  background-size: cover;
}

.bg-clip-text {
  -webkit-background-clip: text;
          background-clip: text;
}

.bg-center {
  background-position: center;
}

.bg-no-repeat {
  background-repeat: no-repeat;
}

.fill-ageno {
  fill: rgb(59 130 246);
}

.fill-black {
  fill: #000;
}

.fill-blue-600 {
  fill: #2563eb;
}

.fill-current {
  fill: currentColor;
}

.fill-white {
  fill: #fff;
}

.stroke-\[\#FF2D20\] {
  stroke: #FF2D20;
}

.stroke-blue-600 {
  stroke: #2563eb;
}

.object-cover {
  -o-object-fit: cover;
     object-fit: cover;
}

.object-fill {
  -o-object-fit: fill;
     object-fit: fill;
}

.object-top {
  -o-object-position: top;
     object-position: top;
}

.p-0 {
  padding: 0px;
}

.p-1 {
  padding: 0.25rem;
}

.p-2 {
  padding: 0.5rem;
}

.p-3 {
  padding: 0.75rem;
}

.p-4 {
  padding: 1rem;
}

.p-5 {
  padding: 1.25rem;
}

.p-6 {
  padding: 1.5rem;
}

.p-7 {
  padding: 1.75rem;
}

.p-px {
  padding: 1px;
}

.px-1 {
  padding-left: 0.25rem;
  padding-right: 0.25rem;
}

.px-2 {
  padding-left: 0.5rem;
  padding-right: 0.5rem;
}

.px-2\.5 {
  padding-left: 0.625rem;
  padding-right: 0.625rem;
}

.px-3 {
  padding-left: 0.75rem;
  padding-right: 0.75rem;
}

.px-3\.5 {
  padding-left: 0.875rem;
  padding-right: 0.875rem;
}

.px-4 {
  padding-left: 1rem;
  padding-right: 1rem;
}

.px-5 {
  padding-left: 1.25rem;
  padding-right: 1.25rem;
}

.px-6 {
  padding-left: 1.5rem;
  padding-right: 1.5rem;
}

.px-7 {
  padding-left: 1.75rem;
  padding-right: 1.75rem;
}

.px-8 {
  padding-left: 2rem;
  padding-right: 2rem;
}

.py-1 {
  padding-top: 0.25rem;
  padding-bottom: 0.25rem;
}

.py-1\.5 {
  padding-top: 0.375rem;
  padding-bottom: 0.375rem;
}

.py-10 {
  padding-top: 2.5rem;
  padding-bottom: 2.5rem;
}

.py-12 {
  padding-top: 3rem;
  padding-bottom: 3rem;
}

.py-16 {
  padding-top: 4rem;
  padding-bottom: 4rem;
}

.py-2 {
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
}

.py-2\.5 {
  padding-top: 0.625rem;
  padding-bottom: 0.625rem;
}

.py-3 {
  padding-top: 0.75rem;
  padding-bottom: 0.75rem;
}

.py-4 {
  padding-top: 1rem;
  padding-bottom: 1rem;
}

.py-5 {
  padding-top: 1.25rem;
  padding-bottom: 1.25rem;
}

.py-6 {
  padding-top: 1.5rem;
  padding-bottom: 1.5rem;
}

.py-8 {
  padding-top: 2rem;
  padding-bottom: 2rem;
}

.pb-1 {
  padding-bottom: 0.25rem;
}

.pb-1\.5 {
  padding-bottom: 0.375rem;
}

.pb-3 {
  padding-bottom: 0.75rem;
}

.pb-6 {
  padding-bottom: 1.5rem;
}

.pe-0 {
  padding-inline-end: 0px;
}

.pe-1 {
  padding-inline-end: 0.25rem;
}

.pe-2 {
  padding-inline-end: 0.5rem;
}

.pe-3 {
  padding-inline-end: 0.75rem;
}

.pe-4 {
  padding-inline-end: 1rem;
}

.pe-6 {
  padding-inline-end: 1.5rem;
}

.pl-2 {
  padding-left: 0.5rem;
}

.pl-3 {
  padding-left: 0.75rem;
}

.ps-0 {
  padding-inline-start: 0px;
}

.ps-1 {
  padding-inline-start: 0.25rem;
}

.ps-11 {
  padding-inline-start: 2.75rem;
}

.ps-2 {
  padding-inline-start: 0.5rem;
}

.ps-3 {
  padding-inline-start: 0.75rem;
}

.ps-4 {
  padding-inline-start: 1rem;
}

.ps-\[5\.25rem\] {
  padding-inline-start: 5.25rem;
}

.pt-1 {
  padding-top: 0.25rem;
}

.pt-10 {
  padding-top: 2.5rem;
}

.pt-2 {
  padding-top: 0.5rem;
}

.pt-3 {
  padding-top: 0.75rem;
}

.pt-4 {
  padding-top: 1rem;
}

.pt-5 {
  padding-top: 1.25rem;
}

.pt-6 {
  padding-top: 1.5rem;
}

.pt-8 {
  padding-top: 2rem;
}

.text-left {
  text-align: left;
}

.text-center {
  text-align: center;
}

.text-start {
  text-align: start;
}

.font-sans {
  font-family: Figtree, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
}

.text-2xl {
  font-size: 1.5rem;
  line-height: 2rem;
}

.text-3xl {
  font-size: 1.875rem;
  line-height: 2.25rem;
}

.text-4xl {
  font-size: 2.25rem;
  line-height: 2.5rem;
}

.text-base {
  font-size: 1rem;
  line-height: 1.5rem;
}

.text-lg {
  font-size: 1.125rem;
  line-height: 1.75rem;
}

.text-sm {
  font-size: 0.875rem;
  line-height: 1.25rem;
}

.text-sm\/relaxed {
  font-size: 0.875rem;
  line-height: 1.625;
}

.text-xl {
  font-size: 1.25rem;
  line-height: 1.75rem;
}

.text-xs {
  font-size: 0.75rem;
  line-height: 1rem;
}

.font-bold {
  font-weight: 700;
}

.font-light {
  font-weight: 300;
}

.font-medium {
  font-weight: 500;
}

.font-normal {
  font-weight: 400;
}

.font-semibold {
  font-weight: 600;
}

.font-thin {
  font-weight: 100;
}

.uppercase {
  text-transform: uppercase;
}

.lowercase {
  text-transform: lowercase;
}

.capitalize {
  text-transform: capitalize;
}

.italic {
  font-style: italic;
}

.leading-10 {
  line-height: 2.5rem;
}

.leading-4 {
  line-height: 1rem;
}

.leading-5 {
  line-height: 1.25rem;
}

.leading-6 {
  line-height: 1.5rem;
}

.leading-7 {
  line-height: 1.75rem;
}

.leading-none {
  line-height: 1;
}

.leading-tight {
  line-height: 1.25;
}

.tracking-tight {
  letter-spacing: -0.025em;
}

.tracking-wide {
  letter-spacing: 0.025em;
}

.tracking-wider {
  letter-spacing: 0.05em;
}

.tracking-widest {
  letter-spacing: 0.1em;
}

.text-ageno {
  --tw-text-opacity: 1;
  color: rgb(59 130 246 / var(--tw-text-opacity));
}

.text-ageno-2 {
  --tw-text-opacity: 1;
  color: rgb(37 99 235 / var(--tw-text-opacity));
}

.text-black {
  --tw-text-opacity: 1;
  color: rgb(0 0 0 / var(--tw-text-opacity));
}

.text-black\/50 {
  color: rgb(0 0 0 / 0.5);
}

.text-blue-500 {
  --tw-text-opacity: 1;
  color: rgb(59 130 246 / var(--tw-text-opacity));
}

.text-blue-600 {
  --tw-text-opacity: 1;
  color: rgb(37 99 235 / var(--tw-text-opacity));
}

.text-blue-900 {
  --tw-text-opacity: 1;
  color: rgb(30 58 138 / var(--tw-text-opacity));
}

.text-cyan-500 {
  --tw-text-opacity: 1;
  color: rgb(6 182 212 / var(--tw-text-opacity));
}

.text-gray-200 {
  --tw-text-opacity: 1;
  color: rgb(229 231 235 / var(--tw-text-opacity));
}

.text-gray-300 {
  --tw-text-opacity: 1;
  color: rgb(209 213 219 / var(--tw-text-opacity));
}

.text-gray-400 {
  --tw-text-opacity: 1;
  color: rgb(156 163 175 / var(--tw-text-opacity));
}

.text-gray-500 {
  --tw-text-opacity: 1;
  color: rgb(107 114 128 / var(--tw-text-opacity));
}

.text-gray-600 {
  --tw-text-opacity: 1;
  color: rgb(75 85 99 / var(--tw-text-opacity));
}

.text-gray-700 {
  --tw-text-opacity: 1;
  color: rgb(55 65 81 / var(--tw-text-opacity));
}

.text-gray-800 {
  --tw-text-opacity: 1;
  color: rgb(31 41 55 / var(--tw-text-opacity));
}

.text-gray-900 {
  --tw-text-opacity: 1;
  color: rgb(17 24 39 / var(--tw-text-opacity));
}

.text-gray-950 {
  --tw-text-opacity: 1;
  color: rgb(3 7 18 / var(--tw-text-opacity));
}

.text-green-600 {
  --tw-text-opacity: 1;
  color: rgb(22 163 74 / var(--tw-text-opacity));
}

.text-indigo-500 {
  --tw-text-opacity: 1;
  color: rgb(99 102 241 / var(--tw-text-opacity));
}

.text-indigo-600 {
  --tw-text-opacity: 1;
  color: rgb(79 70 229 / var(--tw-text-opacity));
}

.text-indigo-700 {
  --tw-text-opacity: 1;
  color: rgb(67 56 202 / var(--tw-text-opacity));
}

.text-neutral-700 {
  --tw-text-opacity: 1;
  color: rgb(64 64 64 / var(--tw-text-opacity));
}

.text-orange-500 {
  --tw-text-opacity: 1;
  color: rgb(249 115 22 / var(--tw-text-opacity));
}

.text-red-600 {
  --tw-text-opacity: 1;
  color: rgb(220 38 38 / var(--tw-text-opacity));
}

.text-transparent {
  color: transparent;
}

.text-violet-600 {
  --tw-text-opacity: 1;
  color: rgb(124 58 237 / var(--tw-text-opacity));
}

.text-violet-800 {
  --tw-text-opacity: 1;
  color: rgb(91 33 182 / var(--tw-text-opacity));
}

.text-violet-900 {
  --tw-text-opacity: 1;
  color: rgb(76 29 149 / var(--tw-text-opacity));
}

.text-white {
  --tw-text-opacity: 1;
  color: rgb(255 255 255 / var(--tw-text-opacity));
}

.underline {
  text-decoration-line: underline;
}

.antialiased {
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

.placeholder-gray-400::-moz-placeholder {
  --tw-placeholder-opacity: 1;
  color: rgb(156 163 175 / var(--tw-placeholder-opacity));
}

.placeholder-gray-400::placeholder {
  --tw-placeholder-opacity: 1;
  color: rgb(156 163 175 / var(--tw-placeholder-opacity));
}

.opacity-0 {
  opacity: 0;
}

.opacity-10 {
  opacity: 0.1;
}

.opacity-100 {
  opacity: 1;
}

.opacity-20 {
  opacity: 0.2;
}

.opacity-30 {
  opacity: 0.3;
}

.opacity-40 {
  opacity: 0.4;
}

.opacity-60 {
  opacity: 0.6;
}

.opacity-70 {
  opacity: 0.7;
}

.opacity-75 {
  opacity: 0.75;
}

.opacity-80 {
  opacity: 0.8;
}

.opacity-90 {
  opacity: 0.9;
}

.shadow {
  --tw-shadow: 0 1px 3px 0 rgb(0 0 0 / 0.1), 0 1px 2px -1px rgb(0 0 0 / 0.1);
  --tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

.shadow-2xl {
  --tw-shadow: 0 25px 50px -12px rgb(0 0 0 / 0.25);
  --tw-shadow-colored: 0 25px 50px -12px var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

.shadow-\[0px_14px_34px_0px_rgba\(0\2c 0\2c 0\2c 0\.08\)\] {
  --tw-shadow: 0px 14px 34px 0px rgba(0,0,0,0.08);
  --tw-shadow-colored: 0px 14px 34px 0px var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

.shadow-lg {
  --tw-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
  --tw-shadow-colored: 0 10px 15px -3px var(--tw-shadow-color), 0 4px 6px -4px var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

.shadow-md {
  --tw-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
  --tw-shadow-colored: 0 4px 6px -1px var(--tw-shadow-color), 0 2px 4px -2px var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

.shadow-sm {
  --tw-shadow: 0 1px 2px 0 rgb(0 0 0 / 0.05);
  --tw-shadow-colored: 0 1px 2px 0 var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

.shadow-xl {
  --tw-shadow: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);
  --tw-shadow-colored: 0 20px 25px -5px var(--tw-shadow-color), 0 8px 10px -6px var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

.shadow-gray-600\/10 {
  --tw-shadow-color: rgb(75 85 99 / 0.1);
  --tw-shadow: var(--tw-shadow-colored);
}

.outline-none {
  outline: 2px solid transparent;
  outline-offset: 2px;
}

.ring-1 {
  --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
  --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
  box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
}

.ring-2 {
  --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
  --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);
  box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
}

.ring-black {
  --tw-ring-opacity: 1;
  --tw-ring-color: rgb(0 0 0 / var(--tw-ring-opacity));
}

.ring-gray-300 {
  --tw-ring-opacity: 1;
  --tw-ring-color: rgb(209 213 219 / var(--tw-ring-opacity));
}

.ring-gray-950\/10 {
  --tw-ring-color: rgb(3 7 18 / 0.1);
}

.ring-gray-950\/5 {
  --tw-ring-color: rgb(3 7 18 / 0.05);
}

.ring-transparent {
  --tw-ring-color: transparent;
}

.ring-white {
  --tw-ring-opacity: 1;
  --tw-ring-color: rgb(255 255 255 / var(--tw-ring-opacity));
}

.ring-white\/\[0\.05\] {
  --tw-ring-color: rgb(255 255 255 / 0.05);
}

.ring-opacity-5 {
  --tw-ring-opacity: 0.05;
}

.blur-3xl {
  --tw-blur: blur(64px);
  filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow);
}

.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.06\)\] {
  --tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0,0,0,0.06));
  filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow);
}

.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.25\)\] {
  --tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0,0,0,0.25));
  filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow);
}

.filter {
  filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow);
}

.backdrop-blur-md {
  --tw-backdrop-blur: blur(12px);
  -webkit-backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia);
          backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia);
}

.transition {
  transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-backdrop-filter;
  transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
  transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-backdrop-filter;
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  transition-duration: 150ms;
}

.transition-\[height\] {
  transition-property: height;
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  transition-duration: 150ms;
}

.transition-\[opacity\2c margin\] {
  transition-property: opacity,margin;
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  transition-duration: 150ms;
}

.transition-all {
  transition-property: all;
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  transition-duration: 150ms;
}

.transition-colors {
  transition-property: color, background-color, border-color, text-decoration-color, fill, stroke;
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  transition-duration: 150ms;
}

.transition-opacity {
  transition-property: opacity;
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  transition-duration: 150ms;
}

.transition-transform {
  transition-property: transform;
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  transition-duration: 150ms;
}

.duration-150 {
  transition-duration: 150ms;
}

.duration-200 {
  transition-duration: 200ms;
}

.duration-300 {
  transition-duration: 300ms;
}

.duration-75 {
  transition-duration: 75ms;
}

.ease-in {
  transition-timing-function: cubic-bezier(0.4, 0, 1, 1);
}

.ease-in-out {
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
}

.ease-out {
  transition-timing-function: cubic-bezier(0, 0, 0.2, 1);
}

.\[--placement\:bottom-right\] {
  --placement: bottom-right;
}

.\[--placement\:top-left\] {
  --placement: top-left;
}

.selection\:bg-\[\#FF2D20\] *::-moz-selection {
  --tw-bg-opacity: 1;
  background-color: rgb(255 45 32 / var(--tw-bg-opacity));
}

.selection\:bg-\[\#FF2D20\] *::selection {
  --tw-bg-opacity: 1;
  background-color: rgb(255 45 32 / var(--tw-bg-opacity));
}

.selection\:text-white *::-moz-selection {
  --tw-text-opacity: 1;
  color: rgb(255 255 255 / var(--tw-text-opacity));
}

.selection\:text-white *::selection {
  --tw-text-opacity: 1;
  color: rgb(255 255 255 / var(--tw-text-opacity));
}

.selection\:bg-\[\#FF2D20\]::-moz-selection {
  --tw-bg-opacity: 1;
  background-color: rgb(255 45 32 / var(--tw-bg-opacity));
}

.selection\:bg-\[\#FF2D20\]::selection {
  --tw-bg-opacity: 1;
  background-color: rgb(255 45 32 / var(--tw-bg-opacity));
}

.selection\:text-white::-moz-selection {
  --tw-text-opacity: 1;
  color: rgb(255 255 255 / var(--tw-text-opacity));
}

.selection\:text-white::selection {
  --tw-text-opacity: 1;
  color: rgb(255 255 255 / var(--tw-text-opacity));
}

.placeholder\:text-gray-400::-moz-placeholder {
  --tw-text-opacity: 1;
  color: rgb(156 163 175 / var(--tw-text-opacity));
}

.placeholder\:text-gray-400::placeholder {
  --tw-text-opacity: 1;
  color: rgb(156 163 175 / var(--tw-text-opacity));
}

.before\:absolute::before {
  content: var(--tw-content);
  position: absolute;
}

.before\:inset-0::before {
  content: var(--tw-content);
  inset: 0px;
}

.before\:-bottom-1::before {
  content: var(--tw-content);
  bottom: -0.25rem;
}

.before\:left-2\/4::before {
  content: var(--tw-content);
  left: 50%;
}

.before\:top-2\/4::before {
  content: var(--tw-content);
  top: 50%;
}

.before\:block::before {
  content: var(--tw-content);
  display: block;
}

.before\:inline-block::before {
  content: var(--tw-content);
  display: inline-block;
}

.before\:size-6::before {
  content: var(--tw-content);
  width: 1.5rem;
  height: 1.5rem;
}

.before\:h-12::before {
  content: var(--tw-content);
  height: 3rem;
}

.before\:h-\[0\.1px\]::before {
  content: var(--tw-content);
  height: 0.1px;
}

.before\:w-12::before {
  content: var(--tw-content);
  width: 3rem;
}

.before\:w-full::before {
  content: var(--tw-content);
  width: 100%;
}

.before\:-translate-x-2\/4::before {
  content: var(--tw-content);
  --tw-translate-x: -50%;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.before\:-translate-y-2\/4::before {
  content: var(--tw-content);
  --tw-translate-y: -50%;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.before\:translate-x-0::before {
  content: var(--tw-content);
  --tw-translate-x: 0px;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.before\:transform::before {
  content: var(--tw-content);
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.before\:rounded-full::before {
  content: var(--tw-content);
  border-radius: 9999px;
}

.before\:border::before {
  content: var(--tw-content);
  border-width: 1px;
}

.before\:border-gray-100::before {
  content: var(--tw-content);
  --tw-border-opacity: 1;
  border-color: rgb(243 244 246 / var(--tw-border-opacity));
}

.before\:bg-gray-200::before {
  content: var(--tw-content);
  --tw-bg-opacity: 1;
  background-color: rgb(229 231 235 / var(--tw-bg-opacity));
}

.before\:bg-white::before {
  content: var(--tw-content);
  --tw-bg-opacity: 1;
  background-color: rgb(255 255 255 / var(--tw-bg-opacity));
}

.before\:opacity-0::before {
  content: var(--tw-content);
  opacity: 0;
}

.before\:shadow::before {
  content: var(--tw-content);
  --tw-shadow: 0 1px 3px 0 rgb(0 0 0 / 0.1), 0 1px 2px -1px rgb(0 0 0 / 0.1);
  --tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

.before\:ring-0::before {
  content: var(--tw-content);
  --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
  --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(0px + var(--tw-ring-offset-width)) var(--tw-ring-color);
  box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
}

.before\:transition::before {
  content: var(--tw-content);
  transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-backdrop-filter;
  transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
  transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-backdrop-filter;
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  transition-duration: 150ms;
}

.before\:transition-opacity::before {
  content: var(--tw-content);
  transition-property: opacity;
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  transition-duration: 150ms;
}

.before\:duration-200::before {
  content: var(--tw-content);
  transition-duration: 200ms;
}

.before\:duration-300::before {
  content: var(--tw-content);
  transition-duration: 300ms;
}

.before\:ease-in-out::before {
  content: var(--tw-content);
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
}

.before\:content-\[\'\'\]::before {
  --tw-content: '';
  content: var(--tw-content);
}

.first\:pt-0:first-child {
  padding-top: 0px;
}

.last\:pb-0:last-child {
  padding-bottom: 0px;
}

.checked\:border-indigo-900:checked {
  --tw-border-opacity: 1;
  border-color: rgb(49 46 129 / var(--tw-border-opacity));
}

.checked\:border-purple-600:checked {
  --tw-border-opacity: 1;
  border-color: rgb(147 51 234 / var(--tw-border-opacity));
}

.checked\:bg-none:checked {
  background-image: none;
}

.checked\:text-purple-600:checked {
  --tw-text-opacity: 1;
  color: rgb(147 51 234 / var(--tw-text-opacity));
}

.checked\:ring-0:checked {
  --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
  --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(0px + var(--tw-ring-offset-width)) var(--tw-ring-color);
  box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
}

.checked\:before\:translate-x-full:checked::before {
  content: var(--tw-content);
  --tw-translate-x: 100%;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.checked\:before\:bg-indigo-900:checked::before {
  content: var(--tw-content);
  --tw-bg-opacity: 1;
  background-color: rgb(49 46 129 / var(--tw-bg-opacity));
}

.checked\:before\:bg-white:checked::before {
  content: var(--tw-content);
  --tw-bg-opacity: 1;
  background-color: rgb(255 255 255 / var(--tw-bg-opacity));
}

.group:hover .group-hover\:text-gray-500 {
  --tw-text-opacity: 1;
  color: rgb(107 114 128 / var(--tw-text-opacity));
}

.group:hover .group-hover\:before\:scale-125::before {
  content: var(--tw-content);
  --tw-scale-x: 1.25;
  --tw-scale-y: 1.25;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.peer:checked ~ .peer-checked\:opacity-100 {
  opacity: 1;
}

.hover\:cursor-pointer:hover {
  cursor: pointer;
}

.hover\:border-gray-300:hover {
  --tw-border-opacity: 1;
  border-color: rgb(209 213 219 / var(--tw-border-opacity));
}

.hover\:border-violet-500:hover {
  --tw-border-opacity: 1;
  border-color: rgb(139 92 246 / var(--tw-border-opacity));
}

.hover\:border-violet-900:hover {
  --tw-border-opacity: 1;
  border-color: rgb(76 29 149 / var(--tw-border-opacity));
}

.hover\:bg-ageno-3:hover {
  --tw-bg-opacity: 1;
  background-color: rgb(29 78 216 / var(--tw-bg-opacity));
}

.hover\:bg-blue-400:hover {
  --tw-bg-opacity: 1;
  background-color: rgb(96 165 250 / var(--tw-bg-opacity));
}

.hover\:bg-gray-100:hover {
  --tw-bg-opacity: 1;
  background-color: rgb(243 244 246 / var(--tw-bg-opacity));
}

.hover\:bg-gray-400:hover {
  --tw-bg-opacity: 1;
  background-color: rgb(156 163 175 / var(--tw-bg-opacity));
}

.hover\:bg-gray-400\/10:hover {
  background-color: rgb(156 163 175 / 0.1);
}

.hover\:bg-gray-50:hover {
  --tw-bg-opacity: 1;
  background-color: rgb(249 250 251 / var(--tw-bg-opacity));
}

.hover\:bg-gray-700:hover {
  --tw-bg-opacity: 1;
  background-color: rgb(55 65 81 / var(--tw-bg-opacity));
}

.hover\:bg-red-500:hover {
  --tw-bg-opacity: 1;
  background-color: rgb(239 68 68 / var(--tw-bg-opacity));
}

.hover\:bg-red-600:hover {
  --tw-bg-opacity: 1;
  background-color: rgb(220 38 38 / var(--tw-bg-opacity));
}

.hover\:bg-red-800:hover {
  --tw-bg-opacity: 1;
  background-color: rgb(153 27 27 / var(--tw-bg-opacity));
}

.hover\:bg-violet-700:hover {
  --tw-bg-opacity: 1;
  background-color: rgb(109 40 217 / var(--tw-bg-opacity));
}

.hover\:bg-white:hover {
  --tw-bg-opacity: 1;
  background-color: rgb(255 255 255 / var(--tw-bg-opacity));
}

.hover\:bg-opacity-90:hover {
  --tw-bg-opacity: 0.9;
}

.hover\:bg-opacity-95:hover {
  --tw-bg-opacity: 0.95;
}

.hover\:text-ageno-2:hover {
  --tw-text-opacity: 1;
  color: rgb(37 99 235 / var(--tw-text-opacity));
}

.hover\:text-black:hover {
  --tw-text-opacity: 1;
  color: rgb(0 0 0 / var(--tw-text-opacity));
}

.hover\:text-black\/70:hover {
  color: rgb(0 0 0 / 0.7);
}

.hover\:text-blue-500:hover {
  --tw-text-opacity: 1;
  color: rgb(59 130 246 / var(--tw-text-opacity));
}

.hover\:text-blue-600:hover {
  --tw-text-opacity: 1;
  color: rgb(37 99 235 / var(--tw-text-opacity));
}

.hover\:text-blue-900:hover {
  --tw-text-opacity: 1;
  color: rgb(30 58 138 / var(--tw-text-opacity));
}

.hover\:text-gray-400:hover {
  --tw-text-opacity: 1;
  color: rgb(156 163 175 / var(--tw-text-opacity));
}

.hover\:text-gray-500:hover {
  --tw-text-opacity: 1;
  color: rgb(107 114 128 / var(--tw-text-opacity));
}

.hover\:text-gray-600:hover {
  --tw-text-opacity: 1;
  color: rgb(75 85 99 / var(--tw-text-opacity));
}

.hover\:text-gray-700:hover {
  --tw-text-opacity: 1;
  color: rgb(55 65 81 / var(--tw-text-opacity));
}

.hover\:text-gray-800:hover {
  --tw-text-opacity: 1;
  color: rgb(31 41 55 / var(--tw-text-opacity));
}

.hover\:text-gray-900:hover {
  --tw-text-opacity: 1;
  color: rgb(17 24 39 / var(--tw-text-opacity));
}

.hover\:text-violet-500:hover {
  --tw-text-opacity: 1;
  color: rgb(139 92 246 / var(--tw-text-opacity));
}

.hover\:shadow-md:hover {
  --tw-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
  --tw-shadow-colored: 0 4px 6px -1px var(--tw-shadow-color), 0 2px 4px -2px var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

.hover\:ring-black\/20:hover {
  --tw-ring-color: rgb(0 0 0 / 0.2);
}

.hover\:before\:opacity-10:hover::before {
  content: var(--tw-content);
  opacity: 0.1;
}

.focus\:z-10:focus {
  z-index: 10;
}

.focus\:border-blue-300:focus {
  --tw-border-opacity: 1;
  border-color: rgb(147 197 253 / var(--tw-border-opacity));
}

.focus\:border-blue-400:focus {
  --tw-border-opacity: 1;
  border-color: rgb(96 165 250 / var(--tw-border-opacity));
}

.focus\:border-blue-500:focus {
  --tw-border-opacity: 1;
  border-color: rgb(59 130 246 / var(--tw-border-opacity));
}

.focus\:border-gray-300:focus {
  --tw-border-opacity: 1;
  border-color: rgb(209 213 219 / var(--tw-border-opacity));
}

.focus\:border-indigo-500:focus {
  --tw-border-opacity: 1;
  border-color: rgb(99 102 241 / var(--tw-border-opacity));
}

.focus\:border-indigo-700:focus {
  --tw-border-opacity: 1;
  border-color: rgb(67 56 202 / var(--tw-border-opacity));
}

.focus\:bg-gray-100:focus {
  --tw-bg-opacity: 1;
  background-color: rgb(243 244 246 / var(--tw-bg-opacity));
}

.focus\:bg-gray-50:focus {
  --tw-bg-opacity: 1;
  background-color: rgb(249 250 251 / var(--tw-bg-opacity));
}

.focus\:bg-gray-700:focus {
  --tw-bg-opacity: 1;
  background-color: rgb(55 65 81 / var(--tw-bg-opacity));
}

.focus\:bg-indigo-100:focus {
  --tw-bg-opacity: 1;
  background-color: rgb(224 231 255 / var(--tw-bg-opacity));
}

.focus\:bg-red-600:focus {
  --tw-bg-opacity: 1;
  background-color: rgb(220 38 38 / var(--tw-bg-opacity));
}

.focus\:text-gray-500:focus {
  --tw-text-opacity: 1;
  color: rgb(107 114 128 / var(--tw-text-opacity));
}

.focus\:text-gray-700:focus {
  --tw-text-opacity: 1;
  color: rgb(55 65 81 / var(--tw-text-opacity));
}

.focus\:text-gray-800:focus {
  --tw-text-opacity: 1;
  color: rgb(31 41 55 / var(--tw-text-opacity));
}

.focus\:text-indigo-800:focus {
  --tw-text-opacity: 1;
  color: rgb(55 48 163 / var(--tw-text-opacity));
}

.focus\:opacity-80:focus {
  opacity: 0.8;
}

.focus\:outline-none:focus {
  outline: 2px solid transparent;
  outline-offset: 2px;
}

.focus\:ring:focus {
  --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
  --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color);
  box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
}

.focus\:ring-0:focus {
  --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
  --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(0px + var(--tw-ring-offset-width)) var(--tw-ring-color);
  box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
}

.focus\:ring-2:focus {
  --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
  --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);
  box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
}

.focus\:ring-blue-300:focus {
  --tw-ring-opacity: 1;
  --tw-ring-color: rgb(147 197 253 / var(--tw-ring-opacity));
}

.focus\:ring-blue-400:focus {
  --tw-ring-opacity: 1;
  --tw-ring-color: rgb(96 165 250 / var(--tw-ring-opacity));
}

.focus\:ring-blue-500:focus {
  --tw-ring-opacity: 1;
  --tw-ring-color: rgb(59 130 246 / var(--tw-ring-opacity));
}

.focus\:ring-indigo-500:focus {
  --tw-ring-opacity: 1;
  --tw-ring-color: rgb(99 102 241 / var(--tw-ring-opacity));
}

.focus\:ring-purple-600:focus {
  --tw-ring-opacity: 1;
  --tw-ring-color: rgb(147 51 234 / var(--tw-ring-opacity));
}

.focus\:ring-red-500:focus {
  --tw-ring-opacity: 1;
  --tw-ring-color: rgb(239 68 68 / var(--tw-ring-opacity));
}

.focus\:ring-opacity-40:focus {
  --tw-ring-opacity: 0.4;
}

.focus\:ring-opacity-50:focus {
  --tw-ring-opacity: 0.5;
}

.focus\:ring-offset-0:focus {
  --tw-ring-offset-width: 0px;
}

.focus\:ring-offset-2:focus {
  --tw-ring-offset-width: 2px;
}

.focus\:checked\:border-purple-600:checked:focus {
  --tw-border-opacity: 1;
  border-color: rgb(147 51 234 / var(--tw-border-opacity));
}

.focus-visible\:ring-1:focus-visible {
  --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
  --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
  box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
}

.focus-visible\:ring-2:focus-visible {
  --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
  --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);
  box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
}

.focus-visible\:ring-\[\#FF2D20\]:focus-visible {
  --tw-ring-opacity: 1;
  --tw-ring-color: rgb(255 45 32 / var(--tw-ring-opacity));
}

.focus-visible\:ring-gray-400\/40:focus-visible {
  --tw-ring-color: rgb(156 163 175 / 0.4);
}

.active\:bg-gray-100:active {
  --tw-bg-opacity: 1;
  background-color: rgb(243 244 246 / var(--tw-bg-opacity));
}

.active\:bg-gray-50:active {
  --tw-bg-opacity: 1;
  background-color: rgb(249 250 251 / var(--tw-bg-opacity));
}

.active\:bg-gray-900:active {
  --tw-bg-opacity: 1;
  background-color: rgb(17 24 39 / var(--tw-bg-opacity));
}

.active\:bg-red-700:active {
  --tw-bg-opacity: 1;
  background-color: rgb(185 28 28 / var(--tw-bg-opacity));
}

.active\:text-gray-500:active {
  --tw-text-opacity: 1;
  color: rgb(107 114 128 / var(--tw-text-opacity));
}

.active\:text-gray-700:active {
  --tw-text-opacity: 1;
  color: rgb(55 65 81 / var(--tw-text-opacity));
}

.active\:text-gray-800:active {
  --tw-text-opacity: 1;
  color: rgb(31 41 55 / var(--tw-text-opacity));
}

.enabled\:cursor-wait:enabled {
  cursor: wait;
}

.enabled\:opacity-70:enabled {
  opacity: 0.7;
}

.disabled\:pointer-events-none:disabled {
  pointer-events: none;
}

.disabled\:bg-gray-50:disabled {
  --tw-bg-opacity: 1;
  background-color: rgb(249 250 251 / var(--tw-bg-opacity));
}

.disabled\:text-gray-50:disabled {
  --tw-text-opacity: 1;
  color: rgb(249 250 251 / var(--tw-text-opacity));
}

.disabled\:text-gray-500:disabled {
  --tw-text-opacity: 1;
  color: rgb(107 114 128 / var(--tw-text-opacity));
}

.disabled\:opacity-25:disabled {
  opacity: 0.25;
}

.disabled\:opacity-50:disabled {
  opacity: 0.5;
}

.disabled\:opacity-70:disabled {
  opacity: 0.7;
}

.disabled\:\[-webkit-text-fill-color\:theme\(colors\.gray\.500\)\]:disabled {
  -webkit-text-fill-color: #6b7280;
}

.disabled\:placeholder\:\[-webkit-text-fill-color\:theme\(colors\.gray\.400\)\]:disabled::-moz-placeholder {
  -webkit-text-fill-color: #9ca3af;
}

.disabled\:placeholder\:\[-webkit-text-fill-color\:theme\(colors\.gray\.400\)\]:disabled::placeholder {
  -webkit-text-fill-color: #9ca3af;
}

.disabled\:checked\:bg-current:checked:disabled {
  background-color: currentColor;
}

.disabled\:checked\:text-gray-400:checked:disabled {
  --tw-text-opacity: 1;
  color: rgb(156 163 175 / var(--tw-text-opacity));
}

:is(.dark .dark\:block) {
  display: block;
}

:is(.dark .dark\:flex) {
  display: flex;
}

:is(.dark .dark\:hidden) {
  display: none;
}

:is(.dark .dark\:divide-gray-700) > :not([hidden]) ~ :not([hidden]) {
  --tw-divide-opacity: 1;
  border-color: rgb(55 65 81 / var(--tw-divide-opacity));
}

:is(.dark .dark\:border) {
  border-width: 1px;
}

:is(.dark .dark\:border-gray-500) {
  --tw-border-opacity: 1;
  border-color: rgb(107 114 128 / var(--tw-border-opacity));
}

:is(.dark .dark\:border-gray-600) {
  --tw-border-opacity: 1;
  border-color: rgb(75 85 99 / var(--tw-border-opacity));
}

:is(.dark .dark\:border-gray-700) {
  --tw-border-opacity: 1;
  border-color: rgb(55 65 81 / var(--tw-border-opacity));
}

:is(.dark .dark\:border-indigo-600) {
  --tw-border-opacity: 1;
  border-color: rgb(79 70 229 / var(--tw-border-opacity));
}

:is(.dark .dark\:border-neutral-700) {
  --tw-border-opacity: 1;
  border-color: rgb(64 64 64 / var(--tw-border-opacity));
}

:is(.dark .dark\:border-transparent) {
  border-color: transparent;
}

:is(.dark .dark\:border-violet-500) {
  --tw-border-opacity: 1;
  border-color: rgb(139 92 246 / var(--tw-border-opacity));
}

:is(.dark .dark\:border-violet-700) {
  --tw-border-opacity: 1;
  border-color: rgb(109 40 217 / var(--tw-border-opacity));
}

:is(.dark .dark\:border-violet-900\/60) {
  border-color: rgb(76 29 149 / 0.6);
}

:is(.dark .dark\:border-white\/10) {
  border-color: rgb(255 255 255 / 0.1);
}

:is(.dark .dark\:bg-ageno-dark) {
  --tw-bg-opacity: 1;
  background-color: rgb(23 37 84 / var(--tw-bg-opacity));
}

:is(.dark .dark\:bg-black) {
  --tw-bg-opacity: 1;
  background-color: rgb(0 0 0 / var(--tw-bg-opacity));
}

:is(.dark .dark\:bg-blue-500) {
  --tw-bg-opacity: 1;
  background-color: rgb(59 130 246 / var(--tw-bg-opacity));
}

:is(.dark .dark\:bg-blue-500\/5) {
  background-color: rgb(59 130 246 / 0.05);
}

:is(.dark .dark\:bg-gray-200) {
  --tw-bg-opacity: 1;
  background-color: rgb(229 231 235 / var(--tw-bg-opacity));
}

:is(.dark .dark\:bg-gray-500\/20) {
  background-color: rgb(107 114 128 / 0.2);
}

:is(.dark .dark\:bg-gray-700) {
  --tw-bg-opacity: 1;
  background-color: rgb(55 65 81 / var(--tw-bg-opacity));
}

:is(.dark .dark\:bg-gray-800) {
  --tw-bg-opacity: 1;
  background-color: rgb(31 41 55 / var(--tw-bg-opacity));
}

:is(.dark .dark\:bg-gray-900) {
  --tw-bg-opacity: 1;
  background-color: rgb(17 24 39 / var(--tw-bg-opacity));
}

:is(.dark .dark\:bg-gray-950) {
  --tw-bg-opacity: 1;
  background-color: rgb(3 7 18 / var(--tw-bg-opacity));
}

:is(.dark .dark\:bg-gray-950\/75) {
  background-color: rgb(3 7 18 / 0.75);
}

:is(.dark .dark\:bg-indigo-900\/50) {
  background-color: rgb(49 46 129 / 0.5);
}

:is(.dark .dark\:bg-neutral-700) {
  --tw-bg-opacity: 1;
  background-color: rgb(64 64 64 / var(--tw-bg-opacity));
}

:is(.dark .dark\:bg-neutral-800) {
  --tw-bg-opacity: 1;
  background-color: rgb(38 38 38 / var(--tw-bg-opacity));
}

:is(.dark .dark\:bg-neutral-900) {
  --tw-bg-opacity: 1;
  background-color: rgb(23 23 23 / var(--tw-bg-opacity));
}

:is(.dark .dark\:bg-purple-900) {
  --tw-bg-opacity: 1;
  background-color: rgb(88 28 135 / var(--tw-bg-opacity));
}

:is(.dark .dark\:bg-slate-300) {
  --tw-bg-opacity: 1;
  background-color: rgb(203 213 225 / var(--tw-bg-opacity));
}

:is(.dark .dark\:bg-slate-800\/60) {
  background-color: rgb(30 41 59 / 0.6);
}

:is(.dark .dark\:bg-slate-900) {
  --tw-bg-opacity: 1;
  background-color: rgb(15 23 42 / var(--tw-bg-opacity));
}

:is(.dark .dark\:bg-slate-900\/60) {
  background-color: rgb(15 23 42 / 0.6);
}

:is(.dark .dark\:bg-transparent) {
  background-color: transparent;
}

:is(.dark .dark\:bg-violet-900) {
  --tw-bg-opacity: 1;
  background-color: rgb(76 29 149 / var(--tw-bg-opacity));
}

:is(.dark .dark\:bg-white\/5) {
  background-color: rgb(255 255 255 / 0.05);
}

:is(.dark .dark\:bg-zinc-900) {
  --tw-bg-opacity: 1;
  background-color: rgb(24 24 27 / var(--tw-bg-opacity));
}

:is(.dark .dark\:via-zinc-900) {
  --tw-gradient-to: rgb(24 24 27 / 0)  var(--tw-gradient-to-position);
  --tw-gradient-stops: var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to);
}

:is(.dark .dark\:to-zinc-900) {
  --tw-gradient-to: #18181b var(--tw-gradient-to-position);
}

:is(.dark .dark\:fill-ageno-dark) {
  fill: rgb(23 37 84);
}

:is(.dark .dark\:fill-slate-900) {
  fill: #0f172a;
}

:is(.dark .dark\:fill-white) {
  fill: #fff;
}

:is(.dark .dark\:stroke-white) {
  stroke: #fff;
}

:is(.dark .dark\:text-blue-400) {
  --tw-text-opacity: 1;
  color: rgb(96 165 250 / var(--tw-text-opacity));
}

:is(.dark .dark\:text-gray-100) {
  --tw-text-opacity: 1;
  color: rgb(243 244 246 / var(--tw-text-opacity));
}

:is(.dark .dark\:text-gray-200) {
  --tw-text-opacity: 1;
  color: rgb(229 231 235 / var(--tw-text-opacity));
}

:is(.dark .dark\:text-gray-300) {
  --tw-text-opacity: 1;
  color: rgb(209 213 219 / var(--tw-text-opacity));
}

:is(.dark .dark\:text-gray-400) {
  --tw-text-opacity: 1;
  color: rgb(156 163 175 / var(--tw-text-opacity));
}

:is(.dark .dark\:text-gray-500) {
  --tw-text-opacity: 1;
  color: rgb(107 114 128 / var(--tw-text-opacity));
}

:is(.dark .dark\:text-gray-600) {
  --tw-text-opacity: 1;
  color: rgb(75 85 99 / var(--tw-text-opacity));
}

:is(.dark .dark\:text-gray-800) {
  --tw-text-opacity: 1;
  color: rgb(31 41 55 / var(--tw-text-opacity));
}

:is(.dark .dark\:text-green-400) {
  --tw-text-opacity: 1;
  color: rgb(74 222 128 / var(--tw-text-opacity));
}

:is(.dark .dark\:text-indigo-300) {
  --tw-text-opacity: 1;
  color: rgb(165 180 252 / var(--tw-text-opacity));
}

:is(.dark .dark\:text-neutral-200) {
  --tw-text-opacity: 1;
  color: rgb(229 229 229 / var(--tw-text-opacity));
}

:is(.dark .dark\:text-neutral-300) {
  --tw-text-opacity: 1;
  color: rgb(212 212 212 / var(--tw-text-opacity));
}

:is(.dark .dark\:text-neutral-400) {
  --tw-text-opacity: 1;
  color: rgb(163 163 163 / var(--tw-text-opacity));
}

:is(.dark .dark\:text-neutral-500) {
  --tw-text-opacity: 1;
  color: rgb(115 115 115 / var(--tw-text-opacity));
}

:is(.dark .dark\:text-red-400) {
  --tw-text-opacity: 1;
  color: rgb(248 113 113 / var(--tw-text-opacity));
}

:is(.dark .dark\:text-violet-500) {
  --tw-text-opacity: 1;
  color: rgb(139 92 246 / var(--tw-text-opacity));
}

:is(.dark .dark\:text-white) {
  --tw-text-opacity: 1;
  color: rgb(255 255 255 / var(--tw-text-opacity));
}

:is(.dark .dark\:text-white\/50) {
  color: rgb(255 255 255 / 0.5);
}

:is(.dark .dark\:text-white\/70) {
  color: rgb(255 255 255 / 0.7);
}

:is(.dark .dark\:placeholder-gray-600)::-moz-placeholder {
  --tw-placeholder-opacity: 1;
  color: rgb(75 85 99 / var(--tw-placeholder-opacity));
}

:is(.dark .dark\:placeholder-gray-600)::placeholder {
  --tw-placeholder-opacity: 1;
  color: rgb(75 85 99 / var(--tw-placeholder-opacity));
}

:is(.dark .dark\:placeholder-neutral-500)::-moz-placeholder {
  --tw-placeholder-opacity: 1;
  color: rgb(115 115 115 / var(--tw-placeholder-opacity));
}

:is(.dark .dark\:placeholder-neutral-500)::placeholder {
  --tw-placeholder-opacity: 1;
  color: rgb(115 115 115 / var(--tw-placeholder-opacity));
}

:is(.dark .dark\:opacity-20) {
  opacity: 0.2;
}

:is(.dark .dark\:shadow-none) {
  --tw-shadow: 0 0 #0000;
  --tw-shadow-colored: 0 0 #0000;
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

:is(.dark .dark\:shadow-slate-700\/\[\.7\]) {
  --tw-shadow-color: rgb(51 65 85 / .7);
  --tw-shadow: var(--tw-shadow-colored);
}

:is(.dark .dark\:ring-gray-700) {
  --tw-ring-opacity: 1;
  --tw-ring-color: rgb(55 65 81 / var(--tw-ring-opacity));
}

:is(.dark .dark\:ring-neutral-800) {
  --tw-ring-opacity: 1;
  --tw-ring-color: rgb(38 38 38 / var(--tw-ring-opacity));
}

:is(.dark .dark\:ring-white\/10) {
  --tw-ring-color: rgb(255 255 255 / 0.1);
}

:is(.dark .dark\:ring-white\/20) {
  --tw-ring-color: rgb(255 255 255 / 0.2);
}

:is(.dark .dark\:ring-zinc-800) {
  --tw-ring-opacity: 1;
  --tw-ring-color: rgb(39 39 42 / var(--tw-ring-opacity));
}

:is(.dark .dark\:placeholder\:text-gray-500)::-moz-placeholder {
  --tw-text-opacity: 1;
  color: rgb(107 114 128 / var(--tw-text-opacity));
}

:is(.dark .dark\:placeholder\:text-gray-500)::placeholder {
  --tw-text-opacity: 1;
  color: rgb(107 114 128 / var(--tw-text-opacity));
}

:is(.dark .dark\:before\:border-gray-600)::before {
  content: var(--tw-content);
  --tw-border-opacity: 1;
  border-color: rgb(75 85 99 / var(--tw-border-opacity));
}

:is(.dark .dark\:before\:bg-gray-400)::before {
  content: var(--tw-content);
  --tw-bg-opacity: 1;
  background-color: rgb(156 163 175 / var(--tw-bg-opacity));
}

:is(.dark .dark\:checked\:border-purple-500:checked) {
  --tw-border-opacity: 1;
  border-color: rgb(168 85 247 / var(--tw-border-opacity));
}

:is(.dark .dark\:checked\:bg-purple-500:checked) {
  --tw-bg-opacity: 1;
  background-color: rgb(168 85 247 / var(--tw-bg-opacity));
}

:is(.dark .dark\:checked\:before\:bg-white:checked)::before {
  content: var(--tw-content);
  --tw-bg-opacity: 1;
  background-color: rgb(255 255 255 / var(--tw-bg-opacity));
}

:is(.dark .dark\:hover\:border-gray-600:hover) {
  --tw-border-opacity: 1;
  border-color: rgb(75 85 99 / var(--tw-border-opacity));
}

:is(.dark .dark\:hover\:border-gray-700:hover) {
  --tw-border-opacity: 1;
  border-color: rgb(55 65 81 / var(--tw-border-opacity));
}

:is(.dark .dark\:hover\:border-violet-400:hover) {
  --tw-border-opacity: 1;
  border-color: rgb(167 139 250 / var(--tw-border-opacity));
}

:is(.dark .dark\:hover\:border-violet-900:hover) {
  --tw-border-opacity: 1;
  border-color: rgb(76 29 149 / var(--tw-border-opacity));
}

:is(.dark .dark\:hover\:bg-gray-700:hover) {
  --tw-bg-opacity: 1;
  background-color: rgb(55 65 81 / var(--tw-bg-opacity));
}

:is(.dark .dark\:hover\:bg-gray-800:hover) {
  --tw-bg-opacity: 1;
  background-color: rgb(31 41 55 / var(--tw-bg-opacity));
}

:is(.dark .dark\:hover\:bg-gray-900:hover) {
  --tw-bg-opacity: 1;
  background-color: rgb(17 24 39 / var(--tw-bg-opacity));
}

:is(.dark .dark\:hover\:bg-neutral-700:hover) {
  --tw-bg-opacity: 1;
  background-color: rgb(64 64 64 / var(--tw-bg-opacity));
}

:is(.dark .dark\:hover\:bg-neutral-900:hover) {
  --tw-bg-opacity: 1;
  background-color: rgb(23 23 23 / var(--tw-bg-opacity));
}

:is(.dark .dark\:hover\:bg-white:hover) {
  --tw-bg-opacity: 1;
  background-color: rgb(255 255 255 / var(--tw-bg-opacity));
}

:is(.dark .dark\:hover\:bg-white\/10:hover) {
  background-color: rgb(255 255 255 / 0.1);
}

:is(.dark .dark\:hover\:text-blue-400:hover) {
  --tw-text-opacity: 1;
  color: rgb(96 165 250 / var(--tw-text-opacity));
}

:is(.dark .dark\:hover\:text-blue-500:hover) {
  --tw-text-opacity: 1;
  color: rgb(59 130 246 / var(--tw-text-opacity));
}

:is(.dark .dark\:hover\:text-gray-100:hover) {
  --tw-text-opacity: 1;
  color: rgb(243 244 246 / var(--tw-text-opacity));
}

:is(.dark .dark\:hover\:text-gray-200:hover) {
  --tw-text-opacity: 1;
  color: rgb(229 231 235 / var(--tw-text-opacity));
}

:is(.dark .dark\:hover\:text-gray-300:hover) {
  --tw-text-opacity: 1;
  color: rgb(209 213 219 / var(--tw-text-opacity));
}

:is(.dark .dark\:hover\:text-gray-400:hover) {
  --tw-text-opacity: 1;
  color: rgb(156 163 175 / var(--tw-text-opacity));
}

:is(.dark .dark\:hover\:text-gray-500:hover) {
  --tw-text-opacity: 1;
  color: rgb(107 114 128 / var(--tw-text-opacity));
}

:is(.dark .dark\:hover\:text-neutral-200:hover) {
  --tw-text-opacity: 1;
  color: rgb(229 229 229 / var(--tw-text-opacity));
}

:is(.dark .dark\:hover\:text-neutral-300:hover) {
  --tw-text-opacity: 1;
  color: rgb(212 212 212 / var(--tw-text-opacity));
}

:is(.dark .dark\:hover\:text-violet-400:hover) {
  --tw-text-opacity: 1;
  color: rgb(167 139 250 / var(--tw-text-opacity));
}

:is(.dark .dark\:hover\:text-white:hover) {
  --tw-text-opacity: 1;
  color: rgb(255 255 255 / var(--tw-text-opacity));
}

:is(.dark .dark\:hover\:text-white\/70:hover) {
  color: rgb(255 255 255 / 0.7);
}

:is(.dark .dark\:hover\:text-white\/80:hover) {
  color: rgb(255 255 255 / 0.8);
}

:is(.dark .dark\:hover\:ring-zinc-700:hover) {
  --tw-ring-opacity: 1;
  --tw-ring-color: rgb(63 63 70 / var(--tw-ring-opacity));
}

:is(.dark .dark\:focus\:border-blue-400:focus) {
  --tw-border-opacity: 1;
  border-color: rgb(96 165 250 / var(--tw-border-opacity));
}

:is(.dark .dark\:focus\:border-blue-700:focus) {
  --tw-border-opacity: 1;
  border-color: rgb(29 78 216 / var(--tw-border-opacity));
}

:is(.dark .dark\:focus\:border-blue-800:focus) {
  --tw-border-opacity: 1;
  border-color: rgb(30 64 175 / var(--tw-border-opacity));
}

:is(.dark .dark\:focus\:border-gray-600:focus) {
  --tw-border-opacity: 1;
  border-color: rgb(75 85 99 / var(--tw-border-opacity));
}

:is(.dark .dark\:focus\:border-gray-700:focus) {
  --tw-border-opacity: 1;
  border-color: rgb(55 65 81 / var(--tw-border-opacity));
}

:is(.dark .dark\:focus\:border-indigo-300:focus) {
  --tw-border-opacity: 1;
  border-color: rgb(165 180 252 / var(--tw-border-opacity));
}

:is(.dark .dark\:focus\:border-indigo-600:focus) {
  --tw-border-opacity: 1;
  border-color: rgb(79 70 229 / var(--tw-border-opacity));
}

:is(.dark .dark\:focus\:bg-gray-700:focus) {
  --tw-bg-opacity: 1;
  background-color: rgb(55 65 81 / var(--tw-bg-opacity));
}

:is(.dark .dark\:focus\:bg-gray-800:focus) {
  --tw-bg-opacity: 1;
  background-color: rgb(31 41 55 / var(--tw-bg-opacity));
}

:is(.dark .dark\:focus\:bg-gray-900:focus) {
  --tw-bg-opacity: 1;
  background-color: rgb(17 24 39 / var(--tw-bg-opacity));
}

:is(.dark .dark\:focus\:bg-indigo-900:focus) {
  --tw-bg-opacity: 1;
  background-color: rgb(49 46 129 / var(--tw-bg-opacity));
}

:is(.dark .dark\:focus\:bg-white:focus) {
  --tw-bg-opacity: 1;
  background-color: rgb(255 255 255 / var(--tw-bg-opacity));
}

:is(.dark .dark\:focus\:text-gray-200:focus) {
  --tw-text-opacity: 1;
  color: rgb(229 231 235 / var(--tw-text-opacity));
}

:is(.dark .dark\:focus\:text-gray-300:focus) {
  --tw-text-opacity: 1;
  color: rgb(209 213 219 / var(--tw-text-opacity));
}

:is(.dark .dark\:focus\:text-gray-400:focus) {
  --tw-text-opacity: 1;
  color: rgb(156 163 175 / var(--tw-text-opacity));
}

:is(.dark .dark\:focus\:text-indigo-200:focus) {
  --tw-text-opacity: 1;
  color: rgb(199 210 254 / var(--tw-text-opacity));
}

:is(.dark .dark\:focus\:outline-none:focus) {
  outline: 2px solid transparent;
  outline-offset: 2px;
}

:is(.dark .dark\:focus\:ring-1:focus) {
  --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
  --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
  box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
}

:is(.dark .dark\:focus\:ring-gray-600:focus) {
  --tw-ring-opacity: 1;
  --tw-ring-color: rgb(75 85 99 / var(--tw-ring-opacity));
}

:is(.dark .dark\:focus\:ring-indigo-600:focus) {
  --tw-ring-opacity: 1;
  --tw-ring-color: rgb(79 70 229 / var(--tw-ring-opacity));
}

:is(.dark .dark\:focus\:ring-neutral-600:focus) {
  --tw-ring-opacity: 1;
  --tw-ring-color: rgb(82 82 82 / var(--tw-ring-opacity));
}

:is(.dark .dark\:focus\:ring-offset-gray-600:focus) {
  --tw-ring-offset-color: #4b5563;
}

:is(.dark .dark\:focus\:ring-offset-gray-800:focus) {
  --tw-ring-offset-color: #1f2937;
}

:is(.dark .dark\:focus-visible\:ring-\[\#FF2D20\]:focus-visible) {
  --tw-ring-opacity: 1;
  --tw-ring-color: rgb(255 45 32 / var(--tw-ring-opacity));
}

:is(.dark .dark\:focus-visible\:ring-white:focus-visible) {
  --tw-ring-opacity: 1;
  --tw-ring-color: rgb(255 255 255 / var(--tw-ring-opacity));
}

:is(.dark .dark\:active\:bg-gray-300:active) {
  --tw-bg-opacity: 1;
  background-color: rgb(209 213 219 / var(--tw-bg-opacity));
}

:is(.dark .dark\:active\:bg-gray-700:active) {
  --tw-bg-opacity: 1;
  background-color: rgb(55 65 81 / var(--tw-bg-opacity));
}

:is(.dark .dark\:active\:text-gray-300:active) {
  --tw-text-opacity: 1;
  color: rgb(209 213 219 / var(--tw-text-opacity));
}

:is(.dark .dark\:disabled\:bg-transparent:disabled) {
  background-color: transparent;
}

:is(.dark .dark\:disabled\:text-gray-400:disabled) {
  --tw-text-opacity: 1;
  color: rgb(156 163 175 / var(--tw-text-opacity));
}

:is(.dark .dark\:disabled\:ring-white\/10:disabled) {
  --tw-ring-color: rgb(255 255 255 / 0.1);
}

:is(.dark .dark\:disabled\:\[-webkit-text-fill-color\:theme\(colors\.gray\.400\)\]:disabled) {
  -webkit-text-fill-color: #9ca3af;
}

:is(.dark .dark\:disabled\:placeholder\:\[-webkit-text-fill-color\:theme\(colors\.gray\.500\)\]:disabled)::-moz-placeholder {
  -webkit-text-fill-color: #6b7280;
}

:is(.dark .dark\:disabled\:placeholder\:\[-webkit-text-fill-color\:theme\(colors\.gray\.500\)\]:disabled)::placeholder {
  -webkit-text-fill-color: #6b7280;
}

:is(.dark .dark\:disabled\:checked\:bg-gray-600:checked:disabled) {
  --tw-bg-opacity: 1;
  background-color: rgb(75 85 99 / var(--tw-bg-opacity));
}

@media (min-width: 640px) {
  .sm\:order-3 {
    order: 3;
  }

  .sm\:col-\[--col-span-sm\] {
    grid-column: var(--col-span-sm);
  }

  .sm\:col-span-2 {
    grid-column: span 2 / span 2;
  }

  .sm\:col-span-4 {
    grid-column: span 4 / span 4;
  }

  .sm\:col-start-\[--col-start-sm\] {
    grid-column-start: var(--col-start-sm);
  }

  .sm\:-my-px {
    margin-top: -1px;
    margin-bottom: -1px;
  }

  .sm\:mx-0 {
    margin-left: 0px;
    margin-right: 0px;
  }

  .sm\:mx-auto {
    margin-left: auto;
    margin-right: auto;
  }

  .sm\:ms-10 {
    margin-inline-start: 2.5rem;
  }

  .sm\:ms-6 {
    margin-inline-start: 1.5rem;
  }

  .sm\:ms-auto {
    margin-inline-start: auto;
  }

  .sm\:mt-0 {
    margin-top: 0px;
  }

  .sm\:mt-12 {
    margin-top: 3rem;
  }

  .sm\:mt-20 {
    margin-top: 5rem;
  }

  .sm\:block {
    display: block;
  }

  .sm\:flex {
    display: flex;
  }

  .sm\:grid {
    display: grid;
  }

  .sm\:inline-grid {
    display: inline-grid;
  }

  .sm\:hidden {
    display: none;
  }

  .sm\:size-16 {
    width: 4rem;
    height: 4rem;
  }

  .sm\:size-6 {
    width: 1.5rem;
    height: 1.5rem;
  }

  .sm\:w-1\/2 {
    width: 50%;
  }

  .sm\:w-full {
    width: 100%;
  }

  .sm\:max-w-2xl {
    max-width: 42rem;
  }

  .sm\:max-w-3xl {
    max-width: 48rem;
  }

  .sm\:max-w-4xl {
    max-width: 56rem;
  }

  .sm\:max-w-5xl {
    max-width: 64rem;
  }

  .sm\:max-w-6xl {
    max-width: 72rem;
  }

  .sm\:max-w-7xl {
    max-width: 80rem;
  }

  .sm\:max-w-lg {
    max-width: 32rem;
  }

  .sm\:max-w-md {
    max-width: 28rem;
  }

  .sm\:max-w-sm {
    max-width: 24rem;
  }

  .sm\:max-w-xl {
    max-width: 36rem;
  }

  .sm\:max-w-xs {
    max-width: 20rem;
  }

  .sm\:flex-1 {
    flex: 1 1 0%;
  }

  .sm\:translate-y-0 {
    --tw-translate-y: 0px;
    transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
  }

  .sm\:scale-100 {
    --tw-scale-x: 1;
    --tw-scale-y: 1;
    transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
  }

  .sm\:scale-95 {
    --tw-scale-x: .95;
    --tw-scale-y: .95;
    transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
  }

  .sm\:columns-\[--cols-sm\] {
    -moz-columns: var(--cols-sm);
         columns: var(--cols-sm);
  }

  .sm\:grid-cols-2 {
    grid-template-columns: repeat(2, minmax(0, 1fr));
  }

  .sm\:grid-cols-3 {
    grid-template-columns: repeat(3, minmax(0, 1fr));
  }

  .sm\:grid-cols-\[--cols-sm\] {
    grid-template-columns: var(--cols-sm);
  }

  .sm\:grid-cols-\[repeat\(auto-fit\2c minmax\(0\2c 1fr\)\)\] {
    grid-template-columns: repeat(auto-fit,minmax(0,1fr));
  }

  .sm\:grid-rows-\[1fr_auto_3fr\] {
    grid-template-rows: 1fr auto 3fr;
  }

  .sm\:flex-row {
    flex-direction: row;
  }

  .sm\:flex-nowrap {
    flex-wrap: nowrap;
  }

  .sm\:items-start {
    align-items: flex-start;
  }

  .sm\:items-end {
    align-items: flex-end;
  }

  .sm\:items-center {
    align-items: center;
  }

  .sm\:justify-start {
    justify-content: flex-start;
  }

  .sm\:justify-center {
    justify-content: center;
  }

  .sm\:justify-between {
    justify-content: space-between;
  }

  .sm\:gap-6 {
    gap: 1.5rem;
  }

  .sm\:gap-x-12 {
    -moz-column-gap: 3rem;
         column-gap: 3rem;
  }

  .sm\:gap-x-3 {
    -moz-column-gap: 0.75rem;
         column-gap: 0.75rem;
  }

  .sm\:gap-x-4 {
    -moz-column-gap: 1rem;
         column-gap: 1rem;
  }

  .sm\:gap-x-7 {
    -moz-column-gap: 1.75rem;
         column-gap: 1.75rem;
  }

  .sm\:gap-y-0 {
    row-gap: 0px;
  }

  .sm\:space-y-6 > :not([hidden]) ~ :not([hidden]) {
    --tw-space-y-reverse: 0;
    margin-top: calc(1.5rem * calc(1 - var(--tw-space-y-reverse)));
    margin-bottom: calc(1.5rem * var(--tw-space-y-reverse));
  }

  .sm\:rounded-lg {
    border-radius: 0.5rem;
  }

  .sm\:rounded-xl {
    border-radius: 0.75rem;
  }

  .sm\:p-2 {
    padding: 0.5rem;
  }

  .sm\:p-6 {
    padding: 1.5rem;
  }

  .sm\:p-8 {
    padding: 2rem;
  }

  .sm\:px-0 {
    padding-left: 0px;
    padding-right: 0px;
  }

  .sm\:px-12 {
    padding-left: 3rem;
    padding-right: 3rem;
  }

  .sm\:px-6 {
    padding-left: 1.5rem;
    padding-right: 1.5rem;
  }

  .sm\:py-0 {
    padding-top: 0px;
    padding-bottom: 0px;
  }

  .sm\:py-24 {
    padding-top: 6rem;
    padding-bottom: 6rem;
  }

  .sm\:py-4 {
    padding-top: 1rem;
    padding-bottom: 1rem;
  }

  .sm\:py-6 {
    padding-top: 1.5rem;
    padding-bottom: 1.5rem;
  }

  .sm\:py-7 {
    padding-top: 1.75rem;
    padding-bottom: 1.75rem;
  }

  .sm\:ps-7 {
    padding-inline-start: 1.75rem;
  }

  .sm\:pt-0 {
    padding-top: 0px;
  }

  .sm\:pt-1 {
    padding-top: 0.25rem;
  }

  .sm\:pt-1\.5 {
    padding-top: 0.375rem;
  }

  .sm\:pt-5 {
    padding-top: 1.25rem;
  }

  .sm\:text-center {
    text-align: center;
  }

  .sm\:text-2xl {
    font-size: 1.5rem;
    line-height: 2rem;
  }

  .sm\:text-4xl {
    font-size: 2.25rem;
    line-height: 2.5rem;
  }

  .sm\:text-6xl {
    font-size: 3.75rem;
    line-height: 1;
  }

  .sm\:text-sm {
    font-size: 0.875rem;
    line-height: 1.25rem;
  }

  .sm\:leading-6 {
    line-height: 1.5rem;
  }
}

@media (min-width: 768px) {
  .md\:bottom-4 {
    bottom: 1rem;
  }

  .md\:col-\[--col-span-md\] {
    grid-column: var(--col-span-md);
  }

  .md\:col-span-2 {
    grid-column: span 2 / span 2;
  }

  .md\:col-span-4 {
    grid-column: span 4 / span 4;
  }

  .md\:col-start-\[--col-start-md\] {
    grid-column-start: var(--col-start-md);
  }

  .md\:row-span-3 {
    grid-row: span 3 / span 3;
  }

  .md\:mx-auto {
    margin-left: auto;
    margin-right: auto;
  }

  .md\:mr-3 {
    margin-right: 0.75rem;
  }

  .md\:mt-0 {
    margin-top: 0px;
  }

  .md\:mt-12 {
    margin-top: 3rem;
  }

  .md\:mt-14 {
    margin-top: 3.5rem;
  }

  .md\:block {
    display: block;
  }

  .md\:flex {
    display: flex;
  }

  .md\:inline-grid {
    display: inline-grid;
  }

  .md\:hidden {
    display: none;
  }

  .md\:size-20 {
    width: 5rem;
    height: 5rem;
  }

  .md\:h-56 {
    height: 14rem;
  }

  .md\:w-8\/12 {
    width: 66.666667%;
  }

  .md\:w-\[350px\] {
    width: 350px;
  }

  .md\:min-w-80 {
    min-width: 20rem;
  }

  .md\:max-w-full {
    max-width: 100%;
  }

  .md\:columns-\[--cols-md\] {
    -moz-columns: var(--cols-md);
         columns: var(--cols-md);
  }

  .md\:grid-cols-2 {
    grid-template-columns: repeat(2, minmax(0, 1fr));
  }

  .md\:grid-cols-3 {
    grid-template-columns: repeat(3, minmax(0, 1fr));
  }

  .md\:grid-cols-4 {
    grid-template-columns: repeat(4, minmax(0, 1fr));
  }

  .md\:grid-cols-6 {
    grid-template-columns: repeat(6, minmax(0, 1fr));
  }

  .md\:grid-cols-\[--cols-md\] {
    grid-template-columns: var(--cols-md);
  }

  .md\:items-center {
    align-items: center;
  }

  .md\:gap-6 {
    gap: 1.5rem;
  }

  .md\:gap-x-3 {
    -moz-column-gap: 0.75rem;
         column-gap: 0.75rem;
  }

  .md\:rounded-xl {
    border-radius: 0.75rem;
  }

  .md\:p-2 {
    padding: 0.5rem;
  }

  .md\:p-2\.5 {
    padding: 0.625rem;
  }

  .md\:p-5 {
    padding: 1.25rem;
  }

  .md\:p-6 {
    padding: 1.5rem;
  }

  .md\:p-8 {
    padding: 2rem;
  }

  .md\:px-12 {
    padding-left: 3rem;
    padding-right: 3rem;
  }

  .md\:px-24 {
    padding-left: 6rem;
    padding-right: 6rem;
  }

  .md\:px-8 {
    padding-left: 2rem;
    padding-right: 2rem;
  }

  .md\:py-14 {
    padding-top: 3.5rem;
    padding-bottom: 3.5rem;
  }

  .md\:pe-6 {
    padding-inline-end: 1.5rem;
  }

  .md\:text-3xl {
    font-size: 1.875rem;
    line-height: 2.25rem;
  }

  .md\:text-4xl {
    font-size: 2.25rem;
    line-height: 2.5rem;
  }

  .md\:text-6xl {
    font-size: 3.75rem;
    line-height: 1;
  }

  .md\:text-base {
    font-size: 1rem;
    line-height: 1.5rem;
  }

  .md\:text-lg {
    font-size: 1.125rem;
    line-height: 1.75rem;
  }

  .md\:text-sm {
    font-size: 0.875rem;
    line-height: 1.25rem;
  }

  .md\:leading-tight {
    line-height: 1.25;
  }
}

@media (min-width: 1024px) {
  .lg\:bottom-0 {
    bottom: 0px;
  }

  .lg\:end-auto {
    inset-inline-end: auto;
  }

  .lg\:col-\[--col-span-lg\] {
    grid-column: var(--col-span-lg);
  }

  .lg\:col-span-1 {
    grid-column: span 1 / span 1;
  }

  .lg\:col-span-2 {
    grid-column: span 2 / span 2;
  }

  .lg\:col-start-2 {
    grid-column-start: 2;
  }

  .lg\:col-start-\[--col-start-lg\] {
    grid-column-start: var(--col-start-lg);
  }

  .lg\:mb-14 {
    margin-bottom: 3.5rem;
  }

  .lg\:me-0 {
    margin-inline-end: 0px;
  }

  .lg\:mt-24 {
    margin-top: 6rem;
  }

  .lg\:block {
    display: block;
  }

  .lg\:inline-grid {
    display: inline-grid;
  }

  .lg\:hidden {
    display: none;
  }

  .lg\:size-24 {
    width: 6rem;
    height: 6rem;
  }

  .lg\:h-16 {
    height: 4rem;
  }

  .lg\:h-7 {
    height: 1.75rem;
  }

  .lg\:h-\[32rem\] {
    height: 32rem;
  }

  .lg\:w-1\/12 {
    width: 8.333333%;
  }

  .lg\:w-1\/3 {
    width: 33.333333%;
  }

  .lg\:w-5\/12 {
    width: 41.666667%;
  }

  .lg\:w-7 {
    width: 1.75rem;
  }

  .lg\:w-7\/12 {
    width: 58.333333%;
  }

  .lg\:w-\[1000px\] {
    width: 1000px;
  }

  .lg\:w-\[400px\] {
    width: 400px;
  }

  .lg\:w-\[650px\] {
    width: 650px;
  }

  .lg\:w-full {
    width: 100%;
  }

  .lg\:max-w-7xl {
    max-width: 80rem;
  }

  .lg\:max-w-screen-xl {
    max-width: 1280px;
  }

  .lg\:translate-x-0 {
    --tw-translate-x: 0px;
    transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
  }

  .lg\:columns-\[--cols-lg\] {
    -moz-columns: var(--cols-lg);
         columns: var(--cols-lg);
  }

  .lg\:grid-cols-2 {
    grid-template-columns: repeat(2, minmax(0, 1fr));
  }

  .lg\:grid-cols-3 {
    grid-template-columns: repeat(3, minmax(0, 1fr));
  }

  .lg\:grid-cols-4 {
    grid-template-columns: repeat(4, minmax(0, 1fr));
  }

  .lg\:grid-cols-5 {
    grid-template-columns: repeat(5, minmax(0, 1fr));
  }

  .lg\:grid-cols-6 {
    grid-template-columns: repeat(6, minmax(0, 1fr));
  }

  .lg\:grid-cols-\[--cols-lg\] {
    grid-template-columns: var(--cols-lg);
  }

  .lg\:flex-row {
    flex-direction: row;
  }

  .lg\:flex-col {
    flex-direction: column;
  }

  .lg\:items-end {
    align-items: flex-end;
  }

  .lg\:items-center {
    align-items: center;
  }

  .lg\:justify-center {
    justify-content: center;
  }

  .lg\:gap-3 {
    gap: 0.75rem;
  }

  .lg\:gap-6 {
    gap: 1.5rem;
  }

  .lg\:gap-8 {
    gap: 2rem;
  }

  .lg\:gap-x-10 {
    -moz-column-gap: 2.5rem;
         column-gap: 2.5rem;
  }

  .lg\:gap-x-20 {
    -moz-column-gap: 5rem;
         column-gap: 5rem;
  }

  .lg\:gap-x-24 {
    -moz-column-gap: 6rem;
         column-gap: 6rem;
  }

  .lg\:gap-x-5 {
    -moz-column-gap: 1.25rem;
         column-gap: 1.25rem;
  }

  .lg\:space-y-0 > :not([hidden]) ~ :not([hidden]) {
    --tw-space-y-reverse: 0;
    margin-top: calc(0px * calc(1 - var(--tw-space-y-reverse)));
    margin-bottom: calc(0px * var(--tw-space-y-reverse));
  }

  .lg\:p-10 {
    padding: 2.5rem;
  }

  .lg\:px-0 {
    padding-left: 0px;
    padding-right: 0px;
  }

  .lg\:px-20 {
    padding-left: 5rem;
    padding-right: 5rem;
  }

  .lg\:px-28 {
    padding-left: 7rem;
    padding-right: 7rem;
  }

  .lg\:px-32 {
    padding-left: 8rem;
    padding-right: 8rem;
  }

  .lg\:px-8 {
    padding-left: 2rem;
    padding-right: 2rem;
  }

  .lg\:py-14 {
    padding-top: 3.5rem;
    padding-bottom: 3.5rem;
  }

  .lg\:py-20 {
    padding-top: 5rem;
    padding-bottom: 5rem;
  }

  .lg\:py-3 {
    padding-top: 0.75rem;
    padding-bottom: 0.75rem;
  }

  .lg\:pb-10 {
    padding-bottom: 2.5rem;
  }

  .lg\:pb-28 {
    padding-bottom: 7rem;
  }

  .lg\:pe-8 {
    padding-inline-end: 2rem;
  }

  .lg\:ps-64 {
    padding-inline-start: 16rem;
  }

  .lg\:pt-0 {
    padding-top: 0px;
  }

  .lg\:pt-14 {
    padding-top: 3.5rem;
  }

  .lg\:pt-16 {
    padding-top: 4rem;
  }

  .lg\:text-center {
    text-align: center;
  }

  .lg\:text-2xl {
    font-size: 1.5rem;
    line-height: 2rem;
  }

  .lg\:text-3xl {
    font-size: 1.875rem;
    line-height: 2.25rem;
  }

  .lg\:text-5xl {
    font-size: 3rem;
    line-height: 1;
  }

  .lg\:text-base {
    font-size: 1rem;
    line-height: 1.5rem;
  }

  .lg\:text-lg {
    font-size: 1.125rem;
    line-height: 1.75rem;
  }

  .lg\:text-sm {
    font-size: 0.875rem;
    line-height: 1.25rem;
  }

  .lg\:text-xl {
    font-size: 1.25rem;
    line-height: 1.75rem;
  }

  .lg\:font-normal {
    font-weight: 400;
  }

  .lg\:leading-tight {
    line-height: 1.25;
  }

  .lg\:text-\[\#FF2D20\] {
    --tw-text-opacity: 1;
    color: rgb(255 45 32 / var(--tw-text-opacity));
  }
}

@media (min-width: 1280px) {
  .xl\:col-\[--col-span-xl\] {
    grid-column: var(--col-span-xl);
  }

  .xl\:col-start-\[--col-start-xl\] {
    grid-column-start: var(--col-start-xl);
  }

  .xl\:mt-12 {
    margin-top: 3rem;
  }

  .xl\:inline-grid {
    display: inline-grid;
  }

  .xl\:hidden {
    display: none;
  }

  .xl\:columns-\[--cols-xl\] {
    -moz-columns: var(--cols-xl);
         columns: var(--cols-xl);
  }

  .xl\:grid-cols-3 {
    grid-template-columns: repeat(3, minmax(0, 1fr));
  }

  .xl\:grid-cols-\[--cols-xl\] {
    grid-template-columns: var(--cols-xl);
  }

  .xl\:gap-16 {
    gap: 4rem;
  }

  .xl\:gap-6 {
    gap: 1.5rem;
  }

  .xl\:text-5xl {
    font-size: 3rem;
    line-height: 1;
  }
}

@media (min-width: 1536px) {
  .\32xl\:col-\[--col-span-2xl\] {
    grid-column: var(--col-span-2xl);
  }

  .\32xl\:col-start-\[--col-start-2xl\] {
    grid-column-start: var(--col-start-2xl);
  }

  .\32xl\:inline-grid {
    display: inline-grid;
  }

  .\32xl\:hidden {
    display: none;
  }

  .\32xl\:columns-\[--cols-2xl\] {
    -moz-columns: var(--cols-2xl);
         columns: var(--cols-2xl);
  }

  .\32xl\:grid-cols-\[--cols-2xl\] {
    grid-template-columns: var(--cols-2xl);
  }
}

.ltr\:origin-top-left:where([dir="ltr"], [dir="ltr"] *) {
  transform-origin: top left;
}

.ltr\:origin-top-right:where([dir="ltr"], [dir="ltr"] *) {
  transform-origin: top right;
}

.rtl\:origin-top-left:where([dir="rtl"], [dir="rtl"] *) {
  transform-origin: top left;
}

.rtl\:origin-top-right:where([dir="rtl"], [dir="rtl"] *) {
  transform-origin: top right;
}

.rtl\:-translate-x-full:where([dir="rtl"], [dir="rtl"] *) {
  --tw-translate-x: -100%;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.rtl\:translate-x-1\/2:where([dir="rtl"], [dir="rtl"] *) {
  --tw-translate-x: 50%;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.rtl\:flex-row-reverse:where([dir="rtl"], [dir="rtl"] *) {
  flex-direction: row-reverse;
}

.\[\&\:\:-ms-reveal\]\:hidden::-ms-reveal {
  display: none;
}

.\[\&\:not\(\:has\(\.fi-ac-action\:focus\)\)\]\:focus-within\:ring-2:focus-within:not(:has(.fi-ac-action:focus)) {
  --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
  --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);
  box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
}

.\[\&\:not\(\:nth-child\(1_of_\.fi-btn\)\)\]\:shadow-\[-1px_0_0_0_theme\(colors\.gray\.200\)\]:not(:nth-child(1 of .fi-btn)) {
  --tw-shadow: -1px 0 0 0 #e5e7eb;
  --tw-shadow-colored: -1px 0 0 0 var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

:is(.dark .dark\:\[\&\:not\(\:nth-child\(1_of_\.fi-btn\)\)\]\:shadow-\[-1px_0_0_0_theme\(colors\.white\/20\%\)\]:not(:nth-child(1 of .fi-btn))) {
  --tw-shadow: -1px 0 0 0 rgb(255 255 255 / 20%);
  --tw-shadow-colored: -1px 0 0 0 var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

.\[\&\:not\(\:nth-last-child\(1_of_\.fi-btn\)\)\]\:me-px:not(:nth-last-child(1 of .fi-btn)) {
  margin-inline-end: 1px;
}

.\[\&\:nth-child\(1_of_\.fi-btn\)\]\:rounded-s-lg:nth-child(1 of .fi-btn) {
  border-start-start-radius: 0.5rem;
  border-end-start-radius: 0.5rem;
}

.\[\&\:nth-last-child\(1_of_\.fi-btn\)\]\:rounded-e-lg:nth-last-child(1 of .fi-btn) {
  border-start-end-radius: 0.5rem;
  border-end-end-radius: 0.5rem;
}

:checked+*>.\[\:checked\+\*\>\&\]\:text-white {
  --tw-text-opacity: 1;
  color: rgb(255 255 255 / var(--tw-text-opacity));
}

input:checked+.\[input\:checked\+\&\]\:text-white {
  --tw-text-opacity: 1;
  color: rgb(255 255 255 / var(--tw-text-opacity));
}

input:checked+.\[input\:checked\+\&\]\:ring-0 {
  --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
  --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(0px + var(--tw-ring-offset-width)) var(--tw-ring-color);
  box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
}

input:focus-visible+.\[input\:focus-visible\+\&\]\:z-10 {
  z-index: 10;
}

input:focus-visible+.\[input\:focus-visible\+\&\]\:ring-2 {
  --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
  --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);
  box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
}

input:focus-visible+.\[input\:focus-visible\+\&\]\:ring-gray-950\/10 {
  --tw-ring-color: rgb(3 7 18 / 0.1);
}

:is(.dark input:focus-visible+.dark\:\[input\:focus-visible\+\&\]\:ring-white\/20) {
  --tw-ring-color: rgb(255 255 255 / 0.2);
}
