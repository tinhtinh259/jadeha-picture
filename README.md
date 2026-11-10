# Hướng Dẫn Cài Đặt & Sử Dụng Theme WordPress - Luxe Portrait Studio
> Phiên bản Clone 1:1 từ cấu trúc, số trang, hình ảnh và bố cục của **www.jadehastudio.com**.

---

## 1. Thành phần bộ mã nguồn

### A. Xem trước trực tiếp trên máy tính (Không cần cài server):
Bạn chỉ cần mở trực tiếp các file `.html` trong trình duyệt (Chrome, Cốc Cốc, Edge, Safari):
* [`index.html`](file:///d:/A-Skill/jadehapicture/index.html): **Trang chủ Fullscreen Video** độc lập với 3 link trung tâm (`SHOOTS`, `JADE`, `CONTACT`).
* [`luxury-photoshoot.html`](file:///d:/A-Skill/jadehapicture/luxury-photoshoot.html): Trang Shoots (Trải nghiệm, Quy trình, FAQ, Video BTS).
* [`lovejade.html`](file:///d:/A-Skill/jadehapicture/lovejade.html): Trang giới thiệu tác giả Jade Ha.
* [`portfolio.html`](file:///d:/A-Skill/jadehapicture/portfolio.html): Trang chủ Portfolio với 6 khối ảnh lớn.
* [`fashion.html`](file:///d:/A-Skill/jadehapicture/fashion.html), [`couples.html`](file:///d:/A-Skill/jadehapicture/couples.html), [`portraits.html`](file:///d:/A-Skill/jadehapicture/portraits.html), [`branding.html`](file:///d:/A-Skill/jadehapicture/branding.html), [`maternity.html`](file:///d:/A-Skill/jadehapicture/maternity.html), [`boudoir.html`](file:///d:/A-Skill/jadehapicture/boudoir.html): 6 trang album ảnh chi tiết.
* [`transformations.html`](file:///d:/A-Skill/jadehapicture/transformations.html): Trang Biến Hóa Trước & Sau (Before & After).
* [`meet-the-team.html`](file:///d:/A-Skill/jadehapicture/meet-the-team.html): Trang Đội Ngũ (Jade, Karen, Lauren).
* [`testimonials.html`](file:///d:/A-Skill/jadehapicture/testimonials.html): Trang Cảm Nhận Khách Hàng VIP.
* [`contact.html`](file:///d:/A-Skill/jadehapicture/contact.html): Trang Form Liên Hệ Đặt Lịch.
* [`photographers-store.html`](file:///d:/A-Skill/jadehapicture/photographers-store.html): Cửa hàng Templates & Presets.
* [`mentoring.html`](file:///d:/A-Skill/jadehapicture/mentoring.html) & [`workshop.html`](file:///d:/A-Skill/jadehapicture/workshop.html): Đào tạo & Workshop.

### B. File cài đặt WordPress:
* **`jadeha-theme.zip`**: File cài đặt giao diện hoàn chỉnh cho WordPress.
* **`demo-content.xml`**: File mẫu dữ liệu (nhập 1 lần là tự tạo đủ tất cả các trang và gán template chuẩn xác).

---

## 2. Cách cài đặt lên WordPress siêu nhanh (Chỉ 2 phút)

### Bước 1: Cài đặt Theme
1. Vào trang quản trị WordPress (`yourdomain.com/wp-admin`).
2. Vào mục **Giao diện (Appearance)** -> **Giao diện (Themes)** -> Bấm **Thêm mới (Add New)**.
3. Bấm **Tải giao diện lên (Upload Theme)** -> Chọn file `jadeha-theme.zip` -> Bấm **Cài đặt ngay** -> **Kích hoạt (Activate)**.

### Bước 2: Tự động nhập đầy đủ tất cả các trang (One-Click Import)
1. Vào mục **Công cụ (Tools)** -> **Nhập vào (Import)**.
2. Tại dòng **WordPress**, bấm **Cài đặt ngay (Install Now)** (nếu chưa cài) rồi bấm **Chạy trình nhập (Run Importer)**.
3. Chọn file `demo-content.xml` từ thư mục này và bấm **Tải tệp lên và nhập (Upload file and import)**.
4. Chọn gán tác giả là tài khoản Admin của bạn và bấm **Hoàn tất (Submit)**.
> **Kết quả:** WordPress sẽ tự động tạo đủ 17 trang với đúng tên, đường dẫn và gán mẫu template 1:1 chuẩn xác!

### Bước 3: Cài đặt Trang Chủ
1. Vào **Cài đặt (Settings)** -> **Đọc (Reading)**.
2. Tại mục "Bố cục trang chủ", chọn **Một trang tĩnh (A static page)**:
   * **Trang chính (Homepage):** Chọn trang `Home`.
3. Bấm **Lưu thay đổi**.

### Bước 4: Tạo Menu
1. Vào **Giao diện (Appearance)** -> **Menu**.
2. Thêm các trang (`Home`, `Photoshoots`, `Portfolio`, `Jade`, `Contact`...) vào Menu.
3. Tích chọn Vị trí hiển thị: **Primary Navigation Menu** và bấm **Lưu menu**.

---

## 3. Cách thêm / thay đổi ảnh các Bộ Sưu Tập (Cực kỳ dễ dàng)
1. Trong Admin WordPress, vào **Trang (Pages)** -> Bấm **Chỉnh sửa** trang album bạn muốn đổi ảnh (ví dụ: *Boudoir*, *Fashion*, *Portraits*, *Couples*, *Branding*, *Maternity*, hoặc *Transformations*).
2. Cuộn xuống khung **"📸 Bộ Sưu Tập Ảnh Studio (Media Gallery)"**:
   * Bấm nút **[+ Thêm / Quản lý ảnh từ Thư viện]**.
   * Tích chọn nhiều ảnh từ Thư viện (hoặc kéo thả ảnh mới từ máy tính vào) -> Bấm **Thêm vào Bộ sưu tập**.
   * Dùng chuột **kéo thả thumbnail ảnh** để đổi thứ tự trước sau theo ý muốn.
   * Bấm dấu **[×]** trên từng ảnh nếu muốn xóa bớt ảnh khỏi album.
3. Bấm nút **Cập nhật (Update)** trang.
> **Lưu ý:** Website sẽ tự động tính toán tỷ lệ ảnh để ghép nối chuẩn đẹp từng pixel mà không cần bạn phải chỉnh sửa thủ công. Nếu bạn chưa tải ảnh mới, website sẽ tự động hiển thị bộ ảnh mẫu demo ban đầu!

---

## 4. Hướng dẫn chỉnh sửa chữ, ảnh, link nút cho tất cả các trang khác

### A. Trang Chủ (Home):
* Vào **Giao diện (Appearance)** -> **Tùy biến (Customize)** -> mục **Trang Chủ - Video & Cài Đặt**:
  * Đổi ảnh nền từ Thư viện Media (hoặc dán link video YouTube nền).
  * Đổi khẩu hiệu chính giữa trang (*luxury portrait & fashion studio*).
  * Đổi tên và đường link của 3 nút bấm trung tâm (`SHOOTS`, `JADE`, `CONTACT`).

### B. Các trang nội dung (Shoots, Jade, Meet The Team, Testimonials, Store, Mentoring, Workshops):
* Vào mục **Trang (Pages)** trong WordPress Admin -> Bấm **Chỉnh sửa** bất kỳ trang nào.
* Toàn bộ nội dung chữ, tiêu đề, ảnh và nút bấm đều hiển thị trực tiếp trong khung soạn thảo WordPress:
  * **Sửa chữ:** Click chuột vào đoạn văn hoặc tiêu đề bất kỳ để gõ lại.
  * **Thay ảnh:** Click vào ảnh -> Bấm nút **Thay thế (Replace)** -> Chọn ảnh mới từ Thư viện Media.
  * **Đổi link / chữ nút bấm:** Click vào nút -> Đổi chữ hoặc dán link URL mới.
  * Bấm nút **Cập nhật (Update)** góc trên bên phải để lưu.

---

## 5. Cấu trúc thư viện ảnh Offline Local (`assets/images/`)
Toàn bộ 485 bức ảnh demo chất lượng cao đã được tải về lưu trữ 100% tại local máy tính theo từng danh mục riêng biệt, hoàn toàn độc lập, không phụ thuộc vào bất kỳ máy chủ bên ngoài (Squarespace CDN) nào:

* [`assets/images/boudoir/`](file:///d:/A-Skill/jadehapicture/assets/images/boudoir/): 52 ảnh thể loại Boudoir quyến rũ nghệ thuật.
* [`assets/images/fashion/`](file:///d:/A-Skill/jadehapicture/assets/images/fashion/): 70 ảnh thời trang cao cấp & tạp chí.
* [`assets/images/couples/`](file:///d:/A-Skill/jadehapicture/assets/images/couples/): 65 ảnh chụp cặp đôi & tiền hôn nhân.
* [`assets/images/portraits/`](file:///d:/A-Skill/jadehapicture/assets/images/portraits/): 80 ảnh chân dung nghệ thuật sang trọng.
* [`assets/images/branding/`](file:///d:/A-Skill/jadehapicture/assets/images/branding/): 61 ảnh thương hiệu cá nhân & doanh nhân.
* [`assets/images/maternity/`](file:///d:/A-Skill/jadehapicture/assets/images/maternity/): 65 ảnh mẹ bầu thời thượng.
* [`assets/images/transformations/`](file:///d:/A-Skill/jadehapicture/assets/images/transformations/): 47 ảnh biến hóa Trước & Sau (Before & After).
* [`assets/images/luxury-photoshoot/`](file:///d:/A-Skill/jadehapicture/assets/images/luxury-photoshoot/): Ảnh chụp trang Shoots (quy trình & trải nghiệm).
* [`assets/images/meet-the-team/`](file:///d:/A-Skill/jadehapicture/assets/images/meet-the-team/): Ảnh chân dung đội ngũ studio (Jade, Karen, Lauren).
* [`assets/images/testimonials/`](file:///d:/A-Skill/jadehapicture/assets/images/testimonials/): 24 ảnh chụp kèm lời cảm nhận của khách hàng VIP.
* [`assets/images/store/`](file:///d:/A-Skill/jadehapicture/assets/images/store/): Ảnh mockup cho Photographer Templates & Presets.
* [`assets/images/portfolio/`](file:///d:/A-Skill/jadehapicture/assets/images/portfolio/): Ảnh bìa nền tương tác cho Portfolio Gateway.



