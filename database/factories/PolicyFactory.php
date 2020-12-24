<?php

namespace Database\Factories;

use App\Models\Policy;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class PolicyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Policy::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            [
                'name' => 'Chính sách bảo mật',
                'slug' => 'chinh-sach-bao-mat',
                'content' => '<p>Ch&iacute;nh s&aacute;ch bảo mật<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />
&nbsp;&nbsp;&nbsp;&nbsp;www.nongsansachvietnam.vn cam kết sẽ bảo mật những th&ocirc;ng tin mang t&iacute;nh ri&ecirc;ng tư của kh&aacute;ch h&agrave;ng. Qu&yacute; kh&aacute;ch vui l&ograve;ng đọc bản &ldquo;Ch&iacute;nh s&aacute;ch bảo mật&rdquo; dưới đ&acirc;y để hiểu hơn những cam kết m&agrave; ch&uacute;ng t&ocirc;i thực hiện, nhằm t&ocirc;n trọng v&agrave; bảo vệ quyền lợi của người truy cập:</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;1)Mục&nbsp;đ&iacute;ch&nbsp;thu thập th&ocirc;ng tin c&aacute; nh&acirc;n:</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;Để c&oacute; thể tiến h&agrave;nh mua h&agrave;ng tại www.nongsansachvietnam.vn qu&yacute; kh&aacute;ch c&oacute; thể sẽ được y&ecirc;u cầu đăng k&yacute; với ch&uacute;ng t&ocirc;i th&ocirc;ng tin c&aacute; nh&acirc;n (Email, Họ t&ecirc;n, Số ĐT li&ecirc;n lạc&hellip;). Mọi th&ocirc;ng tin khai b&aacute;o phải đảm bảo t&iacute;nh ch&iacute;nh x&aacute;c v&agrave; hợp ph&aacute;p. www.nongsansachvietnam.vn kh&ocirc;ng chịu mọi tr&aacute;ch nhiệm li&ecirc;n quan đến ph&aacute;p luật của th&ocirc;ng tin khai b&aacute;o. Ch&uacute;ng t&ocirc;i c&oacute; thể sử dụng th&ocirc;ng tin c&aacute; nh&acirc;n của qu&yacute; kh&aacute;ch để thực hiện c&aacute;c c&ocirc;ng việc như sau:</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;Giao&nbsp;h&agrave;ng&nbsp;theo&nbsp;địa&nbsp;chỉ&nbsp;m&agrave;&nbsp;qu&yacute;&nbsp;kh&aacute;ch&nbsp;đ&atilde;&nbsp;cung&nbsp;cấp;</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;Cung&nbsp;cấp&nbsp;th&ocirc;ng&nbsp;tin&nbsp;li&ecirc;n&nbsp;quan&nbsp;đến&nbsp;sản&nbsp;phẩm,&nbsp;lợi&nbsp;&iacute;ch,&nbsp;ưu&nbsp;đ&atilde;i&nbsp;hay&nbsp;c&aacute;c&nbsp;thư&nbsp;từ&nbsp;kh&aacute;c.</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;2) Phạm&nbsp;vi&nbsp;thu&nbsp;thập&nbsp;th&ocirc;ng&nbsp;tin:</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;Ch&uacute;ng&nbsp;t&ocirc;i&nbsp;c&oacute;&nbsp;thể&nbsp;thu&nbsp;thập c&aacute;c th&ocirc;ng tin sau: T&ecirc;n,&nbsp;điện&nbsp;thoại,&nbsp;địa&nbsp;chỉ,&nbsp;email,&nbsp;khi&nbsp;bạn&nbsp;c&oacute;&nbsp;nhu&nbsp;cầu&nbsp;đặt&nbsp;h&agrave;ng&nbsp;với&nbsp;ch&uacute;ng&nbsp;t&ocirc;i&nbsp;vv&hellip;</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;3) Phạm vi sử dụng th&ocirc;ng tin:</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;Ch&uacute;ng t&ocirc;i chỉ sử dụng th&ocirc;ng tin của bạn để tiến h&agrave;nh giao h&agrave;ng theo đơn h&agrave;ng bạn đ&atilde; thực hiện. Khi cần thiết, ch&uacute;ng t&ocirc;i c&oacute; thể sử dụng những th&ocirc;ng tin n&agrave;y để li&ecirc;n hệ trực tiếp với bạn dưới c&aacute;c h&igrave;nh thức như: gởi thư ngỏ, đơn đặt h&agrave;ng, thư cảm ơn, th&ocirc;ng tin về sản phẩm v&agrave; ch&iacute;nh s&aacute;ch bảo mật của ch&uacute;ng t&ocirc;i.</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;4) Cam kết sử dụng th&ocirc;ng tin:</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;Ch&uacute;ng&nbsp;t&ocirc;i&nbsp;sẽ&nbsp;kh&ocirc;ng&nbsp;b&aacute;n,&nbsp;ph&acirc;n&nbsp;phối&nbsp;hoặc&nbsp;cho&nbsp;thu&ecirc;&nbsp;những&nbsp;th&ocirc;ng&nbsp;tin&nbsp;c&aacute;&nbsp;nh&acirc;n&nbsp;của&nbsp;bạn&nbsp;đến&nbsp;bất&nbsp;kỳ&nbsp;b&ecirc;n&nbsp;thứ&nbsp;ba&nbsp;n&agrave;o&nbsp;kh&aacute;c&nbsp;trừ&nbsp;phi&nbsp;bạn&nbsp;cho&nbsp;ph&eacute;p hoặc&nbsp;được&nbsp;y&ecirc;u&nbsp;cầu&nbsp;theo luật&nbsp;định.</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;Nếu&nbsp;bạn&nbsp;cho&nbsp;rằng&nbsp;th&ocirc;ng&nbsp;tin&nbsp;về&nbsp;bạn&nbsp;m&agrave;&nbsp;ch&uacute;ng&nbsp;t&ocirc;i&nbsp;đang&nbsp;nắm&nbsp;giữ&nbsp;c&oacute;&nbsp;phần&nbsp;n&agrave;o&nbsp;kh&ocirc;ng&nbsp;ch&iacute;nh&nbsp;x&aacute;c&nbsp;hoặc&nbsp;chưa&nbsp;đầy&nbsp;đủ,&nbsp;</p>

<p>xin&nbsp;vui&nbsp;l&ograve;ng&nbsp;gửi&nbsp;th&ocirc;ng&nbsp;b&aacute;o&nbsp;bằng&nbsp;văn&nbsp;bản&nbsp;hoặc&nbsp;email&nbsp;cho&nbsp;ch&uacute;ng&nbsp;t&ocirc;i&nbsp;c&agrave;ng&nbsp;sớm&nbsp;c&agrave;ng&nbsp;tốt&nbsp;theo&nbsp;địa&nbsp;chỉ&nbsp;ở dưới, ch&uacute;ng&nbsp;t&ocirc;i&nbsp;sẽ&nbsp;hiệu&nbsp;chỉnh&nbsp;ngay&nbsp;mọi&nbsp;th&ocirc;ng&nbsp;tin&nbsp;chưa&nbsp;ch&iacute;nh&nbsp;x&aacute;c.</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;5) Cam&nbsp;kết&nbsp;bảo&nbsp;mật&nbsp;th&ocirc;ng&nbsp;tin:<br />
&nbsp;&nbsp;&nbsp;&nbsp;Ch&uacute;ng&nbsp;t&ocirc;i&nbsp;cam&nbsp;kết&nbsp;rằng&nbsp;những&nbsp;th&ocirc;ng&nbsp;tin&nbsp;của&nbsp;bạn&nbsp;được&nbsp;bảo&nbsp;mật.&nbsp;Để&nbsp;bảo&nbsp;vệ&nbsp;dữ&nbsp;liệu&nbsp;c&aacute;&nbsp;nh&acirc;n&nbsp;m&agrave;&nbsp;bạn&nbsp;đ&atilde;&nbsp;cungcấp&nbsp;cho&nbsp;ch&uacute;ng&nbsp;t&ocirc;i,&nbsp;ch&uacute;ng&nbsp;t&ocirc;i&nbsp;đ&atilde;&nbsp;thực&nbsp;hiện&nbsp;v&agrave;&nbsp;sử&nbsp;dụng&nbsp;</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;c&aacute;c&nbsp;hệ&nbsp;thống&nbsp;v&agrave;&nbsp;quy&nbsp;tr&igrave;nh&nbsp;quản&nbsp;l&yacute;&nbsp;ph&ugrave;&nbsp;hợp.</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;Chỉ&nbsp;những&nbsp;nh&acirc;n&nbsp;vi&ecirc;n&nbsp;được&nbsp;ủy&nbsp;nhiệm&nbsp;mới&nbsp;được&nbsp;ph&eacute;p&nbsp;truy&nbsp;cập&nbsp;những&nbsp;th&ocirc;ng&nbsp;tin&nbsp;c&aacute;&nbsp;nh&acirc;n&nbsp;để&nbsp;thực&nbsp;hiện&nbsp;nhiệm&nbsp;vụ&nbsp;của&nbsp;họ&nbsp;đối&nbsp;với&nbsp;c&aacute;c&nbsp;sản&nbsp;phẩm&nbsp;của&nbsp;ch&uacute;ng&nbsp;t&ocirc;i.</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;6) Cookie:</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;www.nongsansachvietnam.vn d&ugrave;ng &quot;Cookie&quot; để gi&uacute;p c&aacute; nh&acirc;n h&oacute;a v&agrave; n&acirc;ng cao tối đa hiệu quả sử dụng thời gian trực tuyến của qu&yacute; kh&aacute;ch.</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;- Một cookie l&agrave; một file văn bản được đặt tr&ecirc;n đĩa cứng của bạn bởi một m&aacute;y chủ của trang web. Cookie kh&ocirc;ng được d&ugrave;ng để chạy chương tr&igrave;nh hay đưa virus v&agrave;o m&aacute;y t&iacute;nh của qu&yacute; kh&aacute;ch. Cookie được chỉ định v&agrave;o m&aacute;y t&iacute;nh của qu&yacute; kh&aacute;ch v&agrave; chỉ c&oacute; thể được đọc bởi một m&aacute;y chủ trang web tr&ecirc;n miền được đưa ra cookie cho qu&yacute; kh&aacute;ch.</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;- Một trong những mục đ&iacute;ch của Cookie l&agrave; cung cấp những tiện &iacute;ch để tiết kiệm thời gian của qu&yacute; kh&aacute;ch khi truy cập tại website www.nongsansachvietnam.vn hoặc viếng thăm website www.nongsansachvietnam.vn lần nữa m&agrave; kh&ocirc;ng cần đăng k&yacute; lại th&ocirc;ng tin sẵn c&oacute;.</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;Hầu&nbsp;hết&nbsp;c&aacute;c&nbsp;tr&igrave;nh&nbsp;duyệt&nbsp;web&nbsp;tự&nbsp;động&nbsp;chấp&nbsp;nhận&nbsp;c&aacute;c&nbsp;cookie,&nbsp;nhưng&nbsp;bạn&nbsp;c&oacute;&nbsp;thể&nbsp;thường&nbsp;xuy&ecirc;n&nbsp;thay&nbsp;đổi&nbsp;setting&nbsp;tr&igrave;nh&nbsp;duyệt&nbsp;của&nbsp;bạn&nbsp;để&nbsp;từ&nbsp;chối&nbsp;c&aacute;c&nbsp;cookie&nbsp;nếu&nbsp;bạn</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;muốn.&nbsp;Điều&nbsp;n&agrave;y&nbsp;c&oacute;&nbsp;thể&nbsp;g&acirc;y&nbsp;cản&nbsp;trở&nbsp;đến&nbsp;việc&nbsp;bạn&nbsp;nhận&nbsp;được&nbsp;lợi&nbsp;&iacute;ch&nbsp;tối&nbsp;đa&nbsp;từ&nbsp;website.</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;7) Thay đổi về ch&iacute;nh s&aacute;ch:</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;Ch&uacute;ng t&ocirc;i ho&agrave;n to&agrave;n c&oacute; thể thay đổi nội dung trong trang n&agrave;y m&agrave; kh&ocirc;ng cần phải th&ocirc;ng b&aacute;o trước, để ph&ugrave; hợp với c&aacute;c nhu cầu của www.nongsansachvietnam.vn cũng như nhu cầu v&agrave; sự phản hồi từ kh&aacute;ch h&agrave;ng nếu c&oacute;. Khi cập nhật nội dung ch&iacute;nh s&aacute;ch n&agrave;y, ch&uacute;ng t&ocirc;i sẽ chỉnh sửa lại thời gian &ldquo;Cập nhật lần cuối&rdquo; b&ecirc;n dưới.</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;- Nội dung &ldquo;Ch&iacute;nh s&aacute;ch bảo mật&rdquo; n&agrave;y chỉ &aacute;p dụng tại www.nongsansachvietnam.vn, kh&ocirc;ng bao gồm hoặc li&ecirc;n quan đến c&aacute;c b&ecirc;n thứ ba đặt quảng c&aacute;o hay c&oacute; links tại www.NguyenKim.com. Ch&uacute;ng t&ocirc;i khuyến kh&iacute;ch bạn đọc kỹ ch&iacute;nh s&aacute;ch An to&agrave;n v&agrave; Bảo mật của c&aacute;c trang web của b&ecirc;n thứ ba trước khi cung cấp th&ocirc;ng tin c&aacute; nh&acirc;n cho c&aacute;c trang web đ&oacute;. Ch&uacute;ng t&ocirc;i kh&ocirc;ng chịu tr&aacute;ch nhiệm dưới bất kỳ h&igrave;nh thức n&agrave;o về nội dung v&agrave; t&iacute;nh ph&aacute;p l&yacute; của trang web thuộc b&ecirc;n thứ ba.</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;- V&igrave; vậy, bạn đ&atilde; đồng &yacute; rằng, khi bạn sử dụng website của ch&uacute;ng t&ocirc;i sau khi chỉnh sửa nghĩa l&agrave; bạn đ&atilde; thừa nhận, đồng &yacute; tu&acirc;n thủ cũng như tin tưởng v&agrave;o sự chỉnh sửa n&agrave;y. Do đ&oacute;, ch&uacute;ng t&ocirc;i đề nghị bạn n&ecirc;n xem trước nội dung trang n&agrave;y trước khi truy cập c&aacute;c nội dung kh&aacute;c tr&ecirc;n website cũng như bạn n&ecirc;n đọc v&agrave; tham khảo kỹ nội dung &ldquo;Ch&iacute;nh s&aacute;ch bảo mật&rdquo; của từng website m&agrave; bạn đang truy cập.</p>

<div class="ddict_btn" style="left:1666.25px; top:1094px"><img src="chrome-extension://bpggmmljdiliancllaapiggllnkbjocb/logo/16.png" /></div>',
                'status' => 1,
                'description' => 'ádsđâsđấ',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            [
                'name' => 'Thoả thuận sử dụng',
                'slug' => 'thoa-thuan-su-dung',
                'content' => '<p>Ch&iacute;nh s&aacute;ch bảo mật<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />
&nbsp;&nbsp;&nbsp;&nbsp;www.nongsansachvietnam.vn cam kết sẽ bảo mật những th&ocirc;ng tin mang t&iacute;nh ri&ecirc;ng tư của kh&aacute;ch h&agrave;ng. Qu&yacute; kh&aacute;ch vui l&ograve;ng đọc bản &ldquo;Ch&iacute;nh s&aacute;ch bảo mật&rdquo; dưới đ&acirc;y để hiểu hơn những cam kết m&agrave; ch&uacute;ng t&ocirc;i thực hiện, nhằm t&ocirc;n trọng v&agrave; bảo vệ quyền lợi của người truy cập:</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;1)Mục&nbsp;đ&iacute;ch&nbsp;thu thập th&ocirc;ng tin c&aacute; nh&acirc;n:</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;Để c&oacute; thể tiến h&agrave;nh mua h&agrave;ng tại www.nongsansachvietnam.vn qu&yacute; kh&aacute;ch c&oacute; thể sẽ được y&ecirc;u cầu đăng k&yacute; với ch&uacute;ng t&ocirc;i th&ocirc;ng tin c&aacute; nh&acirc;n (Email, Họ t&ecirc;n, Số ĐT li&ecirc;n lạc&hellip;). Mọi th&ocirc;ng tin khai b&aacute;o phải đảm bảo t&iacute;nh ch&iacute;nh x&aacute;c v&agrave; hợp ph&aacute;p. www.nongsansachvietnam.vn kh&ocirc;ng chịu mọi tr&aacute;ch nhiệm li&ecirc;n quan đến ph&aacute;p luật của th&ocirc;ng tin khai b&aacute;o. Ch&uacute;ng t&ocirc;i c&oacute; thể sử dụng th&ocirc;ng tin c&aacute; nh&acirc;n của qu&yacute; kh&aacute;ch để thực hiện c&aacute;c c&ocirc;ng việc như sau:</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;Giao&nbsp;h&agrave;ng&nbsp;theo&nbsp;địa&nbsp;chỉ&nbsp;m&agrave;&nbsp;qu&yacute;&nbsp;kh&aacute;ch&nbsp;đ&atilde;&nbsp;cung&nbsp;cấp;</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;Cung&nbsp;cấp&nbsp;th&ocirc;ng&nbsp;tin&nbsp;li&ecirc;n&nbsp;quan&nbsp;đến&nbsp;sản&nbsp;phẩm,&nbsp;lợi&nbsp;&iacute;ch,&nbsp;ưu&nbsp;đ&atilde;i&nbsp;hay&nbsp;c&aacute;c&nbsp;thư&nbsp;từ&nbsp;kh&aacute;c.</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;2) Phạm&nbsp;vi&nbsp;thu&nbsp;thập&nbsp;th&ocirc;ng&nbsp;tin:</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;Ch&uacute;ng&nbsp;t&ocirc;i&nbsp;c&oacute;&nbsp;thể&nbsp;thu&nbsp;thập c&aacute;c th&ocirc;ng tin sau: T&ecirc;n,&nbsp;điện&nbsp;thoại,&nbsp;địa&nbsp;chỉ,&nbsp;email,&nbsp;khi&nbsp;bạn&nbsp;c&oacute;&nbsp;nhu&nbsp;cầu&nbsp;đặt&nbsp;h&agrave;ng&nbsp;với&nbsp;ch&uacute;ng&nbsp;t&ocirc;i&nbsp;vv&hellip;</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;3) Phạm vi sử dụng th&ocirc;ng tin:</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;Ch&uacute;ng t&ocirc;i chỉ sử dụng th&ocirc;ng tin của bạn để tiến h&agrave;nh giao h&agrave;ng theo đơn h&agrave;ng bạn đ&atilde; thực hiện. Khi cần thiết, ch&uacute;ng t&ocirc;i c&oacute; thể sử dụng những th&ocirc;ng tin n&agrave;y để li&ecirc;n hệ trực tiếp với bạn dưới c&aacute;c h&igrave;nh thức như: gởi thư ngỏ, đơn đặt h&agrave;ng, thư cảm ơn, th&ocirc;ng tin về sản phẩm v&agrave; ch&iacute;nh s&aacute;ch bảo mật của ch&uacute;ng t&ocirc;i.</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;4) Cam kết sử dụng th&ocirc;ng tin:</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;Ch&uacute;ng&nbsp;t&ocirc;i&nbsp;sẽ&nbsp;kh&ocirc;ng&nbsp;b&aacute;n,&nbsp;ph&acirc;n&nbsp;phối&nbsp;hoặc&nbsp;cho&nbsp;thu&ecirc;&nbsp;những&nbsp;th&ocirc;ng&nbsp;tin&nbsp;c&aacute;&nbsp;nh&acirc;n&nbsp;của&nbsp;bạn&nbsp;đến&nbsp;bất&nbsp;kỳ&nbsp;b&ecirc;n&nbsp;thứ&nbsp;ba&nbsp;n&agrave;o&nbsp;kh&aacute;c&nbsp;trừ&nbsp;phi&nbsp;bạn&nbsp;cho&nbsp;ph&eacute;p hoặc&nbsp;được&nbsp;y&ecirc;u&nbsp;cầu&nbsp;theo luật&nbsp;định.</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;Nếu&nbsp;bạn&nbsp;cho&nbsp;rằng&nbsp;th&ocirc;ng&nbsp;tin&nbsp;về&nbsp;bạn&nbsp;m&agrave;&nbsp;ch&uacute;ng&nbsp;t&ocirc;i&nbsp;đang&nbsp;nắm&nbsp;giữ&nbsp;c&oacute;&nbsp;phần&nbsp;n&agrave;o&nbsp;kh&ocirc;ng&nbsp;ch&iacute;nh&nbsp;x&aacute;c&nbsp;hoặc&nbsp;chưa&nbsp;đầy&nbsp;đủ,&nbsp;</p>

<p>xin&nbsp;vui&nbsp;l&ograve;ng&nbsp;gửi&nbsp;th&ocirc;ng&nbsp;b&aacute;o&nbsp;bằng&nbsp;văn&nbsp;bản&nbsp;hoặc&nbsp;email&nbsp;cho&nbsp;ch&uacute;ng&nbsp;t&ocirc;i&nbsp;c&agrave;ng&nbsp;sớm&nbsp;c&agrave;ng&nbsp;tốt&nbsp;theo&nbsp;địa&nbsp;chỉ&nbsp;ở dưới, ch&uacute;ng&nbsp;t&ocirc;i&nbsp;sẽ&nbsp;hiệu&nbsp;chỉnh&nbsp;ngay&nbsp;mọi&nbsp;th&ocirc;ng&nbsp;tin&nbsp;chưa&nbsp;ch&iacute;nh&nbsp;x&aacute;c.</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;5) Cam&nbsp;kết&nbsp;bảo&nbsp;mật&nbsp;th&ocirc;ng&nbsp;tin:<br />
&nbsp;&nbsp;&nbsp;&nbsp;Ch&uacute;ng&nbsp;t&ocirc;i&nbsp;cam&nbsp;kết&nbsp;rằng&nbsp;những&nbsp;th&ocirc;ng&nbsp;tin&nbsp;của&nbsp;bạn&nbsp;được&nbsp;bảo&nbsp;mật.&nbsp;Để&nbsp;bảo&nbsp;vệ&nbsp;dữ&nbsp;liệu&nbsp;c&aacute;&nbsp;nh&acirc;n&nbsp;m&agrave;&nbsp;bạn&nbsp;đ&atilde;&nbsp;cungcấp&nbsp;cho&nbsp;ch&uacute;ng&nbsp;t&ocirc;i,&nbsp;ch&uacute;ng&nbsp;t&ocirc;i&nbsp;đ&atilde;&nbsp;thực&nbsp;hiện&nbsp;v&agrave;&nbsp;sử&nbsp;dụng&nbsp;</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;c&aacute;c&nbsp;hệ&nbsp;thống&nbsp;v&agrave;&nbsp;quy&nbsp;tr&igrave;nh&nbsp;quản&nbsp;l&yacute;&nbsp;ph&ugrave;&nbsp;hợp.</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;Chỉ&nbsp;những&nbsp;nh&acirc;n&nbsp;vi&ecirc;n&nbsp;được&nbsp;ủy&nbsp;nhiệm&nbsp;mới&nbsp;được&nbsp;ph&eacute;p&nbsp;truy&nbsp;cập&nbsp;những&nbsp;th&ocirc;ng&nbsp;tin&nbsp;c&aacute;&nbsp;nh&acirc;n&nbsp;để&nbsp;thực&nbsp;hiện&nbsp;nhiệm&nbsp;vụ&nbsp;của&nbsp;họ&nbsp;đối&nbsp;với&nbsp;c&aacute;c&nbsp;sản&nbsp;phẩm&nbsp;của&nbsp;ch&uacute;ng&nbsp;t&ocirc;i.</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;6) Cookie:</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;www.nongsansachvietnam.vn d&ugrave;ng &quot;Cookie&quot; để gi&uacute;p c&aacute; nh&acirc;n h&oacute;a v&agrave; n&acirc;ng cao tối đa hiệu quả sử dụng thời gian trực tuyến của qu&yacute; kh&aacute;ch.</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;- Một cookie l&agrave; một file văn bản được đặt tr&ecirc;n đĩa cứng của bạn bởi một m&aacute;y chủ của trang web. Cookie kh&ocirc;ng được d&ugrave;ng để chạy chương tr&igrave;nh hay đưa virus v&agrave;o m&aacute;y t&iacute;nh của qu&yacute; kh&aacute;ch. Cookie được chỉ định v&agrave;o m&aacute;y t&iacute;nh của qu&yacute; kh&aacute;ch v&agrave; chỉ c&oacute; thể được đọc bởi một m&aacute;y chủ trang web tr&ecirc;n miền được đưa ra cookie cho qu&yacute; kh&aacute;ch.</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;- Một trong những mục đ&iacute;ch của Cookie l&agrave; cung cấp những tiện &iacute;ch để tiết kiệm thời gian của qu&yacute; kh&aacute;ch khi truy cập tại website www.nongsansachvietnam.vn hoặc viếng thăm website www.nongsansachvietnam.vn lần nữa m&agrave; kh&ocirc;ng cần đăng k&yacute; lại th&ocirc;ng tin sẵn c&oacute;.</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;Hầu&nbsp;hết&nbsp;c&aacute;c&nbsp;tr&igrave;nh&nbsp;duyệt&nbsp;web&nbsp;tự&nbsp;động&nbsp;chấp&nbsp;nhận&nbsp;c&aacute;c&nbsp;cookie,&nbsp;nhưng&nbsp;bạn&nbsp;c&oacute;&nbsp;thể&nbsp;thường&nbsp;xuy&ecirc;n&nbsp;thay&nbsp;đổi&nbsp;setting&nbsp;tr&igrave;nh&nbsp;duyệt&nbsp;của&nbsp;bạn&nbsp;để&nbsp;từ&nbsp;chối&nbsp;c&aacute;c&nbsp;cookie&nbsp;nếu&nbsp;bạn</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;muốn.&nbsp;Điều&nbsp;n&agrave;y&nbsp;c&oacute;&nbsp;thể&nbsp;g&acirc;y&nbsp;cản&nbsp;trở&nbsp;đến&nbsp;việc&nbsp;bạn&nbsp;nhận&nbsp;được&nbsp;lợi&nbsp;&iacute;ch&nbsp;tối&nbsp;đa&nbsp;từ&nbsp;website.</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;7) Thay đổi về ch&iacute;nh s&aacute;ch:</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;Ch&uacute;ng t&ocirc;i ho&agrave;n to&agrave;n c&oacute; thể thay đổi nội dung trong trang n&agrave;y m&agrave; kh&ocirc;ng cần phải th&ocirc;ng b&aacute;o trước, để ph&ugrave; hợp với c&aacute;c nhu cầu của www.nongsansachvietnam.vn cũng như nhu cầu v&agrave; sự phản hồi từ kh&aacute;ch h&agrave;ng nếu c&oacute;. Khi cập nhật nội dung ch&iacute;nh s&aacute;ch n&agrave;y, ch&uacute;ng t&ocirc;i sẽ chỉnh sửa lại thời gian &ldquo;Cập nhật lần cuối&rdquo; b&ecirc;n dưới.</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;- Nội dung &ldquo;Ch&iacute;nh s&aacute;ch bảo mật&rdquo; n&agrave;y chỉ &aacute;p dụng tại www.nongsansachvietnam.vn, kh&ocirc;ng bao gồm hoặc li&ecirc;n quan đến c&aacute;c b&ecirc;n thứ ba đặt quảng c&aacute;o hay c&oacute; links tại www.NguyenKim.com. Ch&uacute;ng t&ocirc;i khuyến kh&iacute;ch bạn đọc kỹ ch&iacute;nh s&aacute;ch An to&agrave;n v&agrave; Bảo mật của c&aacute;c trang web của b&ecirc;n thứ ba trước khi cung cấp th&ocirc;ng tin c&aacute; nh&acirc;n cho c&aacute;c trang web đ&oacute;. Ch&uacute;ng t&ocirc;i kh&ocirc;ng chịu tr&aacute;ch nhiệm dưới bất kỳ h&igrave;nh thức n&agrave;o về nội dung v&agrave; t&iacute;nh ph&aacute;p l&yacute; của trang web thuộc b&ecirc;n thứ ba.</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;- V&igrave; vậy, bạn đ&atilde; đồng &yacute; rằng, khi bạn sử dụng website của ch&uacute;ng t&ocirc;i sau khi chỉnh sửa nghĩa l&agrave; bạn đ&atilde; thừa nhận, đồng &yacute; tu&acirc;n thủ cũng như tin tưởng v&agrave;o sự chỉnh sửa n&agrave;y. Do đ&oacute;, ch&uacute;ng t&ocirc;i đề nghị bạn n&ecirc;n xem trước nội dung trang n&agrave;y trước khi truy cập c&aacute;c nội dung kh&aacute;c tr&ecirc;n website cũng như bạn n&ecirc;n đọc v&agrave; tham khảo kỹ nội dung &ldquo;Ch&iacute;nh s&aacute;ch bảo mật&rdquo; của từng website m&agrave; bạn đang truy cập.</p>

<div class="ddict_btn" style="left:1666.25px; top:1094px"><img src="chrome-extension://bpggmmljdiliancllaapiggllnkbjocb/logo/16.png" /></div>',
                'status' => 1,
                'description' => 'ádsđâsđấ',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            [
                'name' => 'Chính sách vận chuyển',
                'slug' => 'chin-sach-van-chuyen',
                'content' => '<p>Ch&iacute;nh s&aacute;ch bảo mật<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />
&nbsp;&nbsp;&nbsp;&nbsp;www.nongsansachvietnam.vn cam kết sẽ bảo mật những th&ocirc;ng tin mang t&iacute;nh ri&ecirc;ng tư của kh&aacute;ch h&agrave;ng. Qu&yacute; kh&aacute;ch vui l&ograve;ng đọc bản &ldquo;Ch&iacute;nh s&aacute;ch bảo mật&rdquo; dưới đ&acirc;y để hiểu hơn những cam kết m&agrave; ch&uacute;ng t&ocirc;i thực hiện, nhằm t&ocirc;n trọng v&agrave; bảo vệ quyền lợi của người truy cập:</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;1)Mục&nbsp;đ&iacute;ch&nbsp;thu thập th&ocirc;ng tin c&aacute; nh&acirc;n:</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;Để c&oacute; thể tiến h&agrave;nh mua h&agrave;ng tại www.nongsansachvietnam.vn qu&yacute; kh&aacute;ch c&oacute; thể sẽ được y&ecirc;u cầu đăng k&yacute; với ch&uacute;ng t&ocirc;i th&ocirc;ng tin c&aacute; nh&acirc;n (Email, Họ t&ecirc;n, Số ĐT li&ecirc;n lạc&hellip;). Mọi th&ocirc;ng tin khai b&aacute;o phải đảm bảo t&iacute;nh ch&iacute;nh x&aacute;c v&agrave; hợp ph&aacute;p. www.nongsansachvietnam.vn kh&ocirc;ng chịu mọi tr&aacute;ch nhiệm li&ecirc;n quan đến ph&aacute;p luật của th&ocirc;ng tin khai b&aacute;o. Ch&uacute;ng t&ocirc;i c&oacute; thể sử dụng th&ocirc;ng tin c&aacute; nh&acirc;n của qu&yacute; kh&aacute;ch để thực hiện c&aacute;c c&ocirc;ng việc như sau:</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;Giao&nbsp;h&agrave;ng&nbsp;theo&nbsp;địa&nbsp;chỉ&nbsp;m&agrave;&nbsp;qu&yacute;&nbsp;kh&aacute;ch&nbsp;đ&atilde;&nbsp;cung&nbsp;cấp;</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;Cung&nbsp;cấp&nbsp;th&ocirc;ng&nbsp;tin&nbsp;li&ecirc;n&nbsp;quan&nbsp;đến&nbsp;sản&nbsp;phẩm,&nbsp;lợi&nbsp;&iacute;ch,&nbsp;ưu&nbsp;đ&atilde;i&nbsp;hay&nbsp;c&aacute;c&nbsp;thư&nbsp;từ&nbsp;kh&aacute;c.</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;2) Phạm&nbsp;vi&nbsp;thu&nbsp;thập&nbsp;th&ocirc;ng&nbsp;tin:</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;Ch&uacute;ng&nbsp;t&ocirc;i&nbsp;c&oacute;&nbsp;thể&nbsp;thu&nbsp;thập c&aacute;c th&ocirc;ng tin sau: T&ecirc;n,&nbsp;điện&nbsp;thoại,&nbsp;địa&nbsp;chỉ,&nbsp;email,&nbsp;khi&nbsp;bạn&nbsp;c&oacute;&nbsp;nhu&nbsp;cầu&nbsp;đặt&nbsp;h&agrave;ng&nbsp;với&nbsp;ch&uacute;ng&nbsp;t&ocirc;i&nbsp;vv&hellip;</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;3) Phạm vi sử dụng th&ocirc;ng tin:</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;Ch&uacute;ng t&ocirc;i chỉ sử dụng th&ocirc;ng tin của bạn để tiến h&agrave;nh giao h&agrave;ng theo đơn h&agrave;ng bạn đ&atilde; thực hiện. Khi cần thiết, ch&uacute;ng t&ocirc;i c&oacute; thể sử dụng những th&ocirc;ng tin n&agrave;y để li&ecirc;n hệ trực tiếp với bạn dưới c&aacute;c h&igrave;nh thức như: gởi thư ngỏ, đơn đặt h&agrave;ng, thư cảm ơn, th&ocirc;ng tin về sản phẩm v&agrave; ch&iacute;nh s&aacute;ch bảo mật của ch&uacute;ng t&ocirc;i.</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;4) Cam kết sử dụng th&ocirc;ng tin:</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;Ch&uacute;ng&nbsp;t&ocirc;i&nbsp;sẽ&nbsp;kh&ocirc;ng&nbsp;b&aacute;n,&nbsp;ph&acirc;n&nbsp;phối&nbsp;hoặc&nbsp;cho&nbsp;thu&ecirc;&nbsp;những&nbsp;th&ocirc;ng&nbsp;tin&nbsp;c&aacute;&nbsp;nh&acirc;n&nbsp;của&nbsp;bạn&nbsp;đến&nbsp;bất&nbsp;kỳ&nbsp;b&ecirc;n&nbsp;thứ&nbsp;ba&nbsp;n&agrave;o&nbsp;kh&aacute;c&nbsp;trừ&nbsp;phi&nbsp;bạn&nbsp;cho&nbsp;ph&eacute;p hoặc&nbsp;được&nbsp;y&ecirc;u&nbsp;cầu&nbsp;theo luật&nbsp;định.</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;Nếu&nbsp;bạn&nbsp;cho&nbsp;rằng&nbsp;th&ocirc;ng&nbsp;tin&nbsp;về&nbsp;bạn&nbsp;m&agrave;&nbsp;ch&uacute;ng&nbsp;t&ocirc;i&nbsp;đang&nbsp;nắm&nbsp;giữ&nbsp;c&oacute;&nbsp;phần&nbsp;n&agrave;o&nbsp;kh&ocirc;ng&nbsp;ch&iacute;nh&nbsp;x&aacute;c&nbsp;hoặc&nbsp;chưa&nbsp;đầy&nbsp;đủ,&nbsp;</p>

<p>xin&nbsp;vui&nbsp;l&ograve;ng&nbsp;gửi&nbsp;th&ocirc;ng&nbsp;b&aacute;o&nbsp;bằng&nbsp;văn&nbsp;bản&nbsp;hoặc&nbsp;email&nbsp;cho&nbsp;ch&uacute;ng&nbsp;t&ocirc;i&nbsp;c&agrave;ng&nbsp;sớm&nbsp;c&agrave;ng&nbsp;tốt&nbsp;theo&nbsp;địa&nbsp;chỉ&nbsp;ở dưới, ch&uacute;ng&nbsp;t&ocirc;i&nbsp;sẽ&nbsp;hiệu&nbsp;chỉnh&nbsp;ngay&nbsp;mọi&nbsp;th&ocirc;ng&nbsp;tin&nbsp;chưa&nbsp;ch&iacute;nh&nbsp;x&aacute;c.</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;5) Cam&nbsp;kết&nbsp;bảo&nbsp;mật&nbsp;th&ocirc;ng&nbsp;tin:<br />
&nbsp;&nbsp;&nbsp;&nbsp;Ch&uacute;ng&nbsp;t&ocirc;i&nbsp;cam&nbsp;kết&nbsp;rằng&nbsp;những&nbsp;th&ocirc;ng&nbsp;tin&nbsp;của&nbsp;bạn&nbsp;được&nbsp;bảo&nbsp;mật.&nbsp;Để&nbsp;bảo&nbsp;vệ&nbsp;dữ&nbsp;liệu&nbsp;c&aacute;&nbsp;nh&acirc;n&nbsp;m&agrave;&nbsp;bạn&nbsp;đ&atilde;&nbsp;cungcấp&nbsp;cho&nbsp;ch&uacute;ng&nbsp;t&ocirc;i,&nbsp;ch&uacute;ng&nbsp;t&ocirc;i&nbsp;đ&atilde;&nbsp;thực&nbsp;hiện&nbsp;v&agrave;&nbsp;sử&nbsp;dụng&nbsp;</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;c&aacute;c&nbsp;hệ&nbsp;thống&nbsp;v&agrave;&nbsp;quy&nbsp;tr&igrave;nh&nbsp;quản&nbsp;l&yacute;&nbsp;ph&ugrave;&nbsp;hợp.</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;Chỉ&nbsp;những&nbsp;nh&acirc;n&nbsp;vi&ecirc;n&nbsp;được&nbsp;ủy&nbsp;nhiệm&nbsp;mới&nbsp;được&nbsp;ph&eacute;p&nbsp;truy&nbsp;cập&nbsp;những&nbsp;th&ocirc;ng&nbsp;tin&nbsp;c&aacute;&nbsp;nh&acirc;n&nbsp;để&nbsp;thực&nbsp;hiện&nbsp;nhiệm&nbsp;vụ&nbsp;của&nbsp;họ&nbsp;đối&nbsp;với&nbsp;c&aacute;c&nbsp;sản&nbsp;phẩm&nbsp;của&nbsp;ch&uacute;ng&nbsp;t&ocirc;i.</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;6) Cookie:</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;www.nongsansachvietnam.vn d&ugrave;ng &quot;Cookie&quot; để gi&uacute;p c&aacute; nh&acirc;n h&oacute;a v&agrave; n&acirc;ng cao tối đa hiệu quả sử dụng thời gian trực tuyến của qu&yacute; kh&aacute;ch.</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;- Một cookie l&agrave; một file văn bản được đặt tr&ecirc;n đĩa cứng của bạn bởi một m&aacute;y chủ của trang web. Cookie kh&ocirc;ng được d&ugrave;ng để chạy chương tr&igrave;nh hay đưa virus v&agrave;o m&aacute;y t&iacute;nh của qu&yacute; kh&aacute;ch. Cookie được chỉ định v&agrave;o m&aacute;y t&iacute;nh của qu&yacute; kh&aacute;ch v&agrave; chỉ c&oacute; thể được đọc bởi một m&aacute;y chủ trang web tr&ecirc;n miền được đưa ra cookie cho qu&yacute; kh&aacute;ch.</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;- Một trong những mục đ&iacute;ch của Cookie l&agrave; cung cấp những tiện &iacute;ch để tiết kiệm thời gian của qu&yacute; kh&aacute;ch khi truy cập tại website www.nongsansachvietnam.vn hoặc viếng thăm website www.nongsansachvietnam.vn lần nữa m&agrave; kh&ocirc;ng cần đăng k&yacute; lại th&ocirc;ng tin sẵn c&oacute;.</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;Hầu&nbsp;hết&nbsp;c&aacute;c&nbsp;tr&igrave;nh&nbsp;duyệt&nbsp;web&nbsp;tự&nbsp;động&nbsp;chấp&nbsp;nhận&nbsp;c&aacute;c&nbsp;cookie,&nbsp;nhưng&nbsp;bạn&nbsp;c&oacute;&nbsp;thể&nbsp;thường&nbsp;xuy&ecirc;n&nbsp;thay&nbsp;đổi&nbsp;setting&nbsp;tr&igrave;nh&nbsp;duyệt&nbsp;của&nbsp;bạn&nbsp;để&nbsp;từ&nbsp;chối&nbsp;c&aacute;c&nbsp;cookie&nbsp;nếu&nbsp;bạn</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;muốn.&nbsp;Điều&nbsp;n&agrave;y&nbsp;c&oacute;&nbsp;thể&nbsp;g&acirc;y&nbsp;cản&nbsp;trở&nbsp;đến&nbsp;việc&nbsp;bạn&nbsp;nhận&nbsp;được&nbsp;lợi&nbsp;&iacute;ch&nbsp;tối&nbsp;đa&nbsp;từ&nbsp;website.</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;7) Thay đổi về ch&iacute;nh s&aacute;ch:</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;Ch&uacute;ng t&ocirc;i ho&agrave;n to&agrave;n c&oacute; thể thay đổi nội dung trong trang n&agrave;y m&agrave; kh&ocirc;ng cần phải th&ocirc;ng b&aacute;o trước, để ph&ugrave; hợp với c&aacute;c nhu cầu của www.nongsansachvietnam.vn cũng như nhu cầu v&agrave; sự phản hồi từ kh&aacute;ch h&agrave;ng nếu c&oacute;. Khi cập nhật nội dung ch&iacute;nh s&aacute;ch n&agrave;y, ch&uacute;ng t&ocirc;i sẽ chỉnh sửa lại thời gian &ldquo;Cập nhật lần cuối&rdquo; b&ecirc;n dưới.</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;- Nội dung &ldquo;Ch&iacute;nh s&aacute;ch bảo mật&rdquo; n&agrave;y chỉ &aacute;p dụng tại www.nongsansachvietnam.vn, kh&ocirc;ng bao gồm hoặc li&ecirc;n quan đến c&aacute;c b&ecirc;n thứ ba đặt quảng c&aacute;o hay c&oacute; links tại www.NguyenKim.com. Ch&uacute;ng t&ocirc;i khuyến kh&iacute;ch bạn đọc kỹ ch&iacute;nh s&aacute;ch An to&agrave;n v&agrave; Bảo mật của c&aacute;c trang web của b&ecirc;n thứ ba trước khi cung cấp th&ocirc;ng tin c&aacute; nh&acirc;n cho c&aacute;c trang web đ&oacute;. Ch&uacute;ng t&ocirc;i kh&ocirc;ng chịu tr&aacute;ch nhiệm dưới bất kỳ h&igrave;nh thức n&agrave;o về nội dung v&agrave; t&iacute;nh ph&aacute;p l&yacute; của trang web thuộc b&ecirc;n thứ ba.</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;- V&igrave; vậy, bạn đ&atilde; đồng &yacute; rằng, khi bạn sử dụng website của ch&uacute;ng t&ocirc;i sau khi chỉnh sửa nghĩa l&agrave; bạn đ&atilde; thừa nhận, đồng &yacute; tu&acirc;n thủ cũng như tin tưởng v&agrave;o sự chỉnh sửa n&agrave;y. Do đ&oacute;, ch&uacute;ng t&ocirc;i đề nghị bạn n&ecirc;n xem trước nội dung trang n&agrave;y trước khi truy cập c&aacute;c nội dung kh&aacute;c tr&ecirc;n website cũng như bạn n&ecirc;n đọc v&agrave; tham khảo kỹ nội dung &ldquo;Ch&iacute;nh s&aacute;ch bảo mật&rdquo; của từng website m&agrave; bạn đang truy cập.</p>

<div class="ddict_btn" style="left:1666.25px; top:1094px"><img src="chrome-extension://bpggmmljdiliancllaapiggllnkbjocb/logo/16.png" /></div>',
                'status' => 1,
                'description' => 'ádsđâsđấ',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            [
                'name' => 'Chính sách đổi trả hàng',
                'slug' => 'chinh-sach-doi-tra-hang',
                'content' => '<p>Ch&iacute;nh s&aacute;ch bảo mật<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />
&nbsp;&nbsp;&nbsp;&nbsp;www.nongsansachvietnam.vn cam kết sẽ bảo mật những th&ocirc;ng tin mang t&iacute;nh ri&ecirc;ng tư của kh&aacute;ch h&agrave;ng. Qu&yacute; kh&aacute;ch vui l&ograve;ng đọc bản &ldquo;Ch&iacute;nh s&aacute;ch bảo mật&rdquo; dưới đ&acirc;y để hiểu hơn những cam kết m&agrave; ch&uacute;ng t&ocirc;i thực hiện, nhằm t&ocirc;n trọng v&agrave; bảo vệ quyền lợi của người truy cập:</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;1)Mục&nbsp;đ&iacute;ch&nbsp;thu thập th&ocirc;ng tin c&aacute; nh&acirc;n:</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;Để c&oacute; thể tiến h&agrave;nh mua h&agrave;ng tại www.nongsansachvietnam.vn qu&yacute; kh&aacute;ch c&oacute; thể sẽ được y&ecirc;u cầu đăng k&yacute; với ch&uacute;ng t&ocirc;i th&ocirc;ng tin c&aacute; nh&acirc;n (Email, Họ t&ecirc;n, Số ĐT li&ecirc;n lạc&hellip;). Mọi th&ocirc;ng tin khai b&aacute;o phải đảm bảo t&iacute;nh ch&iacute;nh x&aacute;c v&agrave; hợp ph&aacute;p. www.nongsansachvietnam.vn kh&ocirc;ng chịu mọi tr&aacute;ch nhiệm li&ecirc;n quan đến ph&aacute;p luật của th&ocirc;ng tin khai b&aacute;o. Ch&uacute;ng t&ocirc;i c&oacute; thể sử dụng th&ocirc;ng tin c&aacute; nh&acirc;n của qu&yacute; kh&aacute;ch để thực hiện c&aacute;c c&ocirc;ng việc như sau:</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;Giao&nbsp;h&agrave;ng&nbsp;theo&nbsp;địa&nbsp;chỉ&nbsp;m&agrave;&nbsp;qu&yacute;&nbsp;kh&aacute;ch&nbsp;đ&atilde;&nbsp;cung&nbsp;cấp;</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;Cung&nbsp;cấp&nbsp;th&ocirc;ng&nbsp;tin&nbsp;li&ecirc;n&nbsp;quan&nbsp;đến&nbsp;sản&nbsp;phẩm,&nbsp;lợi&nbsp;&iacute;ch,&nbsp;ưu&nbsp;đ&atilde;i&nbsp;hay&nbsp;c&aacute;c&nbsp;thư&nbsp;từ&nbsp;kh&aacute;c.</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;2) Phạm&nbsp;vi&nbsp;thu&nbsp;thập&nbsp;th&ocirc;ng&nbsp;tin:</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;Ch&uacute;ng&nbsp;t&ocirc;i&nbsp;c&oacute;&nbsp;thể&nbsp;thu&nbsp;thập c&aacute;c th&ocirc;ng tin sau: T&ecirc;n,&nbsp;điện&nbsp;thoại,&nbsp;địa&nbsp;chỉ,&nbsp;email,&nbsp;khi&nbsp;bạn&nbsp;c&oacute;&nbsp;nhu&nbsp;cầu&nbsp;đặt&nbsp;h&agrave;ng&nbsp;với&nbsp;ch&uacute;ng&nbsp;t&ocirc;i&nbsp;vv&hellip;</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;3) Phạm vi sử dụng th&ocirc;ng tin:</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;Ch&uacute;ng t&ocirc;i chỉ sử dụng th&ocirc;ng tin của bạn để tiến h&agrave;nh giao h&agrave;ng theo đơn h&agrave;ng bạn đ&atilde; thực hiện. Khi cần thiết, ch&uacute;ng t&ocirc;i c&oacute; thể sử dụng những th&ocirc;ng tin n&agrave;y để li&ecirc;n hệ trực tiếp với bạn dưới c&aacute;c h&igrave;nh thức như: gởi thư ngỏ, đơn đặt h&agrave;ng, thư cảm ơn, th&ocirc;ng tin về sản phẩm v&agrave; ch&iacute;nh s&aacute;ch bảo mật của ch&uacute;ng t&ocirc;i.</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;4) Cam kết sử dụng th&ocirc;ng tin:</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;Ch&uacute;ng&nbsp;t&ocirc;i&nbsp;sẽ&nbsp;kh&ocirc;ng&nbsp;b&aacute;n,&nbsp;ph&acirc;n&nbsp;phối&nbsp;hoặc&nbsp;cho&nbsp;thu&ecirc;&nbsp;những&nbsp;th&ocirc;ng&nbsp;tin&nbsp;c&aacute;&nbsp;nh&acirc;n&nbsp;của&nbsp;bạn&nbsp;đến&nbsp;bất&nbsp;kỳ&nbsp;b&ecirc;n&nbsp;thứ&nbsp;ba&nbsp;n&agrave;o&nbsp;kh&aacute;c&nbsp;trừ&nbsp;phi&nbsp;bạn&nbsp;cho&nbsp;ph&eacute;p hoặc&nbsp;được&nbsp;y&ecirc;u&nbsp;cầu&nbsp;theo luật&nbsp;định.</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;Nếu&nbsp;bạn&nbsp;cho&nbsp;rằng&nbsp;th&ocirc;ng&nbsp;tin&nbsp;về&nbsp;bạn&nbsp;m&agrave;&nbsp;ch&uacute;ng&nbsp;t&ocirc;i&nbsp;đang&nbsp;nắm&nbsp;giữ&nbsp;c&oacute;&nbsp;phần&nbsp;n&agrave;o&nbsp;kh&ocirc;ng&nbsp;ch&iacute;nh&nbsp;x&aacute;c&nbsp;hoặc&nbsp;chưa&nbsp;đầy&nbsp;đủ,&nbsp;</p>

<p>xin&nbsp;vui&nbsp;l&ograve;ng&nbsp;gửi&nbsp;th&ocirc;ng&nbsp;b&aacute;o&nbsp;bằng&nbsp;văn&nbsp;bản&nbsp;hoặc&nbsp;email&nbsp;cho&nbsp;ch&uacute;ng&nbsp;t&ocirc;i&nbsp;c&agrave;ng&nbsp;sớm&nbsp;c&agrave;ng&nbsp;tốt&nbsp;theo&nbsp;địa&nbsp;chỉ&nbsp;ở dưới, ch&uacute;ng&nbsp;t&ocirc;i&nbsp;sẽ&nbsp;hiệu&nbsp;chỉnh&nbsp;ngay&nbsp;mọi&nbsp;th&ocirc;ng&nbsp;tin&nbsp;chưa&nbsp;ch&iacute;nh&nbsp;x&aacute;c.</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;5) Cam&nbsp;kết&nbsp;bảo&nbsp;mật&nbsp;th&ocirc;ng&nbsp;tin:<br />
&nbsp;&nbsp;&nbsp;&nbsp;Ch&uacute;ng&nbsp;t&ocirc;i&nbsp;cam&nbsp;kết&nbsp;rằng&nbsp;những&nbsp;th&ocirc;ng&nbsp;tin&nbsp;của&nbsp;bạn&nbsp;được&nbsp;bảo&nbsp;mật.&nbsp;Để&nbsp;bảo&nbsp;vệ&nbsp;dữ&nbsp;liệu&nbsp;c&aacute;&nbsp;nh&acirc;n&nbsp;m&agrave;&nbsp;bạn&nbsp;đ&atilde;&nbsp;cungcấp&nbsp;cho&nbsp;ch&uacute;ng&nbsp;t&ocirc;i,&nbsp;ch&uacute;ng&nbsp;t&ocirc;i&nbsp;đ&atilde;&nbsp;thực&nbsp;hiện&nbsp;v&agrave;&nbsp;sử&nbsp;dụng&nbsp;</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;c&aacute;c&nbsp;hệ&nbsp;thống&nbsp;v&agrave;&nbsp;quy&nbsp;tr&igrave;nh&nbsp;quản&nbsp;l&yacute;&nbsp;ph&ugrave;&nbsp;hợp.</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;Chỉ&nbsp;những&nbsp;nh&acirc;n&nbsp;vi&ecirc;n&nbsp;được&nbsp;ủy&nbsp;nhiệm&nbsp;mới&nbsp;được&nbsp;ph&eacute;p&nbsp;truy&nbsp;cập&nbsp;những&nbsp;th&ocirc;ng&nbsp;tin&nbsp;c&aacute;&nbsp;nh&acirc;n&nbsp;để&nbsp;thực&nbsp;hiện&nbsp;nhiệm&nbsp;vụ&nbsp;của&nbsp;họ&nbsp;đối&nbsp;với&nbsp;c&aacute;c&nbsp;sản&nbsp;phẩm&nbsp;của&nbsp;ch&uacute;ng&nbsp;t&ocirc;i.</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;6) Cookie:</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;www.nongsansachvietnam.vn d&ugrave;ng &quot;Cookie&quot; để gi&uacute;p c&aacute; nh&acirc;n h&oacute;a v&agrave; n&acirc;ng cao tối đa hiệu quả sử dụng thời gian trực tuyến của qu&yacute; kh&aacute;ch.</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;- Một cookie l&agrave; một file văn bản được đặt tr&ecirc;n đĩa cứng của bạn bởi một m&aacute;y chủ của trang web. Cookie kh&ocirc;ng được d&ugrave;ng để chạy chương tr&igrave;nh hay đưa virus v&agrave;o m&aacute;y t&iacute;nh của qu&yacute; kh&aacute;ch. Cookie được chỉ định v&agrave;o m&aacute;y t&iacute;nh của qu&yacute; kh&aacute;ch v&agrave; chỉ c&oacute; thể được đọc bởi một m&aacute;y chủ trang web tr&ecirc;n miền được đưa ra cookie cho qu&yacute; kh&aacute;ch.</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;- Một trong những mục đ&iacute;ch của Cookie l&agrave; cung cấp những tiện &iacute;ch để tiết kiệm thời gian của qu&yacute; kh&aacute;ch khi truy cập tại website www.nongsansachvietnam.vn hoặc viếng thăm website www.nongsansachvietnam.vn lần nữa m&agrave; kh&ocirc;ng cần đăng k&yacute; lại th&ocirc;ng tin sẵn c&oacute;.</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;Hầu&nbsp;hết&nbsp;c&aacute;c&nbsp;tr&igrave;nh&nbsp;duyệt&nbsp;web&nbsp;tự&nbsp;động&nbsp;chấp&nbsp;nhận&nbsp;c&aacute;c&nbsp;cookie,&nbsp;nhưng&nbsp;bạn&nbsp;c&oacute;&nbsp;thể&nbsp;thường&nbsp;xuy&ecirc;n&nbsp;thay&nbsp;đổi&nbsp;setting&nbsp;tr&igrave;nh&nbsp;duyệt&nbsp;của&nbsp;bạn&nbsp;để&nbsp;từ&nbsp;chối&nbsp;c&aacute;c&nbsp;cookie&nbsp;nếu&nbsp;bạn</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;muốn.&nbsp;Điều&nbsp;n&agrave;y&nbsp;c&oacute;&nbsp;thể&nbsp;g&acirc;y&nbsp;cản&nbsp;trở&nbsp;đến&nbsp;việc&nbsp;bạn&nbsp;nhận&nbsp;được&nbsp;lợi&nbsp;&iacute;ch&nbsp;tối&nbsp;đa&nbsp;từ&nbsp;website.</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;7) Thay đổi về ch&iacute;nh s&aacute;ch:</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;Ch&uacute;ng t&ocirc;i ho&agrave;n to&agrave;n c&oacute; thể thay đổi nội dung trong trang n&agrave;y m&agrave; kh&ocirc;ng cần phải th&ocirc;ng b&aacute;o trước, để ph&ugrave; hợp với c&aacute;c nhu cầu của www.nongsansachvietnam.vn cũng như nhu cầu v&agrave; sự phản hồi từ kh&aacute;ch h&agrave;ng nếu c&oacute;. Khi cập nhật nội dung ch&iacute;nh s&aacute;ch n&agrave;y, ch&uacute;ng t&ocirc;i sẽ chỉnh sửa lại thời gian &ldquo;Cập nhật lần cuối&rdquo; b&ecirc;n dưới.</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;- Nội dung &ldquo;Ch&iacute;nh s&aacute;ch bảo mật&rdquo; n&agrave;y chỉ &aacute;p dụng tại www.nongsansachvietnam.vn, kh&ocirc;ng bao gồm hoặc li&ecirc;n quan đến c&aacute;c b&ecirc;n thứ ba đặt quảng c&aacute;o hay c&oacute; links tại www.NguyenKim.com. Ch&uacute;ng t&ocirc;i khuyến kh&iacute;ch bạn đọc kỹ ch&iacute;nh s&aacute;ch An to&agrave;n v&agrave; Bảo mật của c&aacute;c trang web của b&ecirc;n thứ ba trước khi cung cấp th&ocirc;ng tin c&aacute; nh&acirc;n cho c&aacute;c trang web đ&oacute;. Ch&uacute;ng t&ocirc;i kh&ocirc;ng chịu tr&aacute;ch nhiệm dưới bất kỳ h&igrave;nh thức n&agrave;o về nội dung v&agrave; t&iacute;nh ph&aacute;p l&yacute; của trang web thuộc b&ecirc;n thứ ba.</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;- V&igrave; vậy, bạn đ&atilde; đồng &yacute; rằng, khi bạn sử dụng website của ch&uacute;ng t&ocirc;i sau khi chỉnh sửa nghĩa l&agrave; bạn đ&atilde; thừa nhận, đồng &yacute; tu&acirc;n thủ cũng như tin tưởng v&agrave;o sự chỉnh sửa n&agrave;y. Do đ&oacute;, ch&uacute;ng t&ocirc;i đề nghị bạn n&ecirc;n xem trước nội dung trang n&agrave;y trước khi truy cập c&aacute;c nội dung kh&aacute;c tr&ecirc;n website cũng như bạn n&ecirc;n đọc v&agrave; tham khảo kỹ nội dung &ldquo;Ch&iacute;nh s&aacute;ch bảo mật&rdquo; của từng website m&agrave; bạn đang truy cập.</p>

<div class="ddict_btn" style="left:1666.25px; top:1094px"><img src="chrome-extension://bpggmmljdiliancllaapiggllnkbjocb/logo/16.png" /></div>',
                'status' => 1,
                'description' => 'ádsđâsđấ',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            [
                'name' => 'Hướng dẫn thanh toán',
                'slug' => 'huong-dan-thanh-toan',
                'content' => '<p>Ch&iacute;nh s&aacute;ch bảo mật<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />
&nbsp;&nbsp;&nbsp;&nbsp;www.nongsansachvietnam.vn cam kết sẽ bảo mật những th&ocirc;ng tin mang t&iacute;nh ri&ecirc;ng tư của kh&aacute;ch h&agrave;ng. Qu&yacute; kh&aacute;ch vui l&ograve;ng đọc bản &ldquo;Ch&iacute;nh s&aacute;ch bảo mật&rdquo; dưới đ&acirc;y để hiểu hơn những cam kết m&agrave; ch&uacute;ng t&ocirc;i thực hiện, nhằm t&ocirc;n trọng v&agrave; bảo vệ quyền lợi của người truy cập:</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;1)Mục&nbsp;đ&iacute;ch&nbsp;thu thập th&ocirc;ng tin c&aacute; nh&acirc;n:</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;Để c&oacute; thể tiến h&agrave;nh mua h&agrave;ng tại www.nongsansachvietnam.vn qu&yacute; kh&aacute;ch c&oacute; thể sẽ được y&ecirc;u cầu đăng k&yacute; với ch&uacute;ng t&ocirc;i th&ocirc;ng tin c&aacute; nh&acirc;n (Email, Họ t&ecirc;n, Số ĐT li&ecirc;n lạc&hellip;). Mọi th&ocirc;ng tin khai b&aacute;o phải đảm bảo t&iacute;nh ch&iacute;nh x&aacute;c v&agrave; hợp ph&aacute;p. www.nongsansachvietnam.vn kh&ocirc;ng chịu mọi tr&aacute;ch nhiệm li&ecirc;n quan đến ph&aacute;p luật của th&ocirc;ng tin khai b&aacute;o. Ch&uacute;ng t&ocirc;i c&oacute; thể sử dụng th&ocirc;ng tin c&aacute; nh&acirc;n của qu&yacute; kh&aacute;ch để thực hiện c&aacute;c c&ocirc;ng việc như sau:</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;Giao&nbsp;h&agrave;ng&nbsp;theo&nbsp;địa&nbsp;chỉ&nbsp;m&agrave;&nbsp;qu&yacute;&nbsp;kh&aacute;ch&nbsp;đ&atilde;&nbsp;cung&nbsp;cấp;</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;Cung&nbsp;cấp&nbsp;th&ocirc;ng&nbsp;tin&nbsp;li&ecirc;n&nbsp;quan&nbsp;đến&nbsp;sản&nbsp;phẩm,&nbsp;lợi&nbsp;&iacute;ch,&nbsp;ưu&nbsp;đ&atilde;i&nbsp;hay&nbsp;c&aacute;c&nbsp;thư&nbsp;từ&nbsp;kh&aacute;c.</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;2) Phạm&nbsp;vi&nbsp;thu&nbsp;thập&nbsp;th&ocirc;ng&nbsp;tin:</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;Ch&uacute;ng&nbsp;t&ocirc;i&nbsp;c&oacute;&nbsp;thể&nbsp;thu&nbsp;thập c&aacute;c th&ocirc;ng tin sau: T&ecirc;n,&nbsp;điện&nbsp;thoại,&nbsp;địa&nbsp;chỉ,&nbsp;email,&nbsp;khi&nbsp;bạn&nbsp;c&oacute;&nbsp;nhu&nbsp;cầu&nbsp;đặt&nbsp;h&agrave;ng&nbsp;với&nbsp;ch&uacute;ng&nbsp;t&ocirc;i&nbsp;vv&hellip;</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;3) Phạm vi sử dụng th&ocirc;ng tin:</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;Ch&uacute;ng t&ocirc;i chỉ sử dụng th&ocirc;ng tin của bạn để tiến h&agrave;nh giao h&agrave;ng theo đơn h&agrave;ng bạn đ&atilde; thực hiện. Khi cần thiết, ch&uacute;ng t&ocirc;i c&oacute; thể sử dụng những th&ocirc;ng tin n&agrave;y để li&ecirc;n hệ trực tiếp với bạn dưới c&aacute;c h&igrave;nh thức như: gởi thư ngỏ, đơn đặt h&agrave;ng, thư cảm ơn, th&ocirc;ng tin về sản phẩm v&agrave; ch&iacute;nh s&aacute;ch bảo mật của ch&uacute;ng t&ocirc;i.</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;4) Cam kết sử dụng th&ocirc;ng tin:</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;Ch&uacute;ng&nbsp;t&ocirc;i&nbsp;sẽ&nbsp;kh&ocirc;ng&nbsp;b&aacute;n,&nbsp;ph&acirc;n&nbsp;phối&nbsp;hoặc&nbsp;cho&nbsp;thu&ecirc;&nbsp;những&nbsp;th&ocirc;ng&nbsp;tin&nbsp;c&aacute;&nbsp;nh&acirc;n&nbsp;của&nbsp;bạn&nbsp;đến&nbsp;bất&nbsp;kỳ&nbsp;b&ecirc;n&nbsp;thứ&nbsp;ba&nbsp;n&agrave;o&nbsp;kh&aacute;c&nbsp;trừ&nbsp;phi&nbsp;bạn&nbsp;cho&nbsp;ph&eacute;p hoặc&nbsp;được&nbsp;y&ecirc;u&nbsp;cầu&nbsp;theo luật&nbsp;định.</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;Nếu&nbsp;bạn&nbsp;cho&nbsp;rằng&nbsp;th&ocirc;ng&nbsp;tin&nbsp;về&nbsp;bạn&nbsp;m&agrave;&nbsp;ch&uacute;ng&nbsp;t&ocirc;i&nbsp;đang&nbsp;nắm&nbsp;giữ&nbsp;c&oacute;&nbsp;phần&nbsp;n&agrave;o&nbsp;kh&ocirc;ng&nbsp;ch&iacute;nh&nbsp;x&aacute;c&nbsp;hoặc&nbsp;chưa&nbsp;đầy&nbsp;đủ,&nbsp;</p>

<p>xin&nbsp;vui&nbsp;l&ograve;ng&nbsp;gửi&nbsp;th&ocirc;ng&nbsp;b&aacute;o&nbsp;bằng&nbsp;văn&nbsp;bản&nbsp;hoặc&nbsp;email&nbsp;cho&nbsp;ch&uacute;ng&nbsp;t&ocirc;i&nbsp;c&agrave;ng&nbsp;sớm&nbsp;c&agrave;ng&nbsp;tốt&nbsp;theo&nbsp;địa&nbsp;chỉ&nbsp;ở dưới, ch&uacute;ng&nbsp;t&ocirc;i&nbsp;sẽ&nbsp;hiệu&nbsp;chỉnh&nbsp;ngay&nbsp;mọi&nbsp;th&ocirc;ng&nbsp;tin&nbsp;chưa&nbsp;ch&iacute;nh&nbsp;x&aacute;c.</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;5) Cam&nbsp;kết&nbsp;bảo&nbsp;mật&nbsp;th&ocirc;ng&nbsp;tin:<br />
&nbsp;&nbsp;&nbsp;&nbsp;Ch&uacute;ng&nbsp;t&ocirc;i&nbsp;cam&nbsp;kết&nbsp;rằng&nbsp;những&nbsp;th&ocirc;ng&nbsp;tin&nbsp;của&nbsp;bạn&nbsp;được&nbsp;bảo&nbsp;mật.&nbsp;Để&nbsp;bảo&nbsp;vệ&nbsp;dữ&nbsp;liệu&nbsp;c&aacute;&nbsp;nh&acirc;n&nbsp;m&agrave;&nbsp;bạn&nbsp;đ&atilde;&nbsp;cungcấp&nbsp;cho&nbsp;ch&uacute;ng&nbsp;t&ocirc;i,&nbsp;ch&uacute;ng&nbsp;t&ocirc;i&nbsp;đ&atilde;&nbsp;thực&nbsp;hiện&nbsp;v&agrave;&nbsp;sử&nbsp;dụng&nbsp;</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;c&aacute;c&nbsp;hệ&nbsp;thống&nbsp;v&agrave;&nbsp;quy&nbsp;tr&igrave;nh&nbsp;quản&nbsp;l&yacute;&nbsp;ph&ugrave;&nbsp;hợp.</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;Chỉ&nbsp;những&nbsp;nh&acirc;n&nbsp;vi&ecirc;n&nbsp;được&nbsp;ủy&nbsp;nhiệm&nbsp;mới&nbsp;được&nbsp;ph&eacute;p&nbsp;truy&nbsp;cập&nbsp;những&nbsp;th&ocirc;ng&nbsp;tin&nbsp;c&aacute;&nbsp;nh&acirc;n&nbsp;để&nbsp;thực&nbsp;hiện&nbsp;nhiệm&nbsp;vụ&nbsp;của&nbsp;họ&nbsp;đối&nbsp;với&nbsp;c&aacute;c&nbsp;sản&nbsp;phẩm&nbsp;của&nbsp;ch&uacute;ng&nbsp;t&ocirc;i.</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;6) Cookie:</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;www.nongsansachvietnam.vn d&ugrave;ng &quot;Cookie&quot; để gi&uacute;p c&aacute; nh&acirc;n h&oacute;a v&agrave; n&acirc;ng cao tối đa hiệu quả sử dụng thời gian trực tuyến của qu&yacute; kh&aacute;ch.</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;- Một cookie l&agrave; một file văn bản được đặt tr&ecirc;n đĩa cứng của bạn bởi một m&aacute;y chủ của trang web. Cookie kh&ocirc;ng được d&ugrave;ng để chạy chương tr&igrave;nh hay đưa virus v&agrave;o m&aacute;y t&iacute;nh của qu&yacute; kh&aacute;ch. Cookie được chỉ định v&agrave;o m&aacute;y t&iacute;nh của qu&yacute; kh&aacute;ch v&agrave; chỉ c&oacute; thể được đọc bởi một m&aacute;y chủ trang web tr&ecirc;n miền được đưa ra cookie cho qu&yacute; kh&aacute;ch.</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;- Một trong những mục đ&iacute;ch của Cookie l&agrave; cung cấp những tiện &iacute;ch để tiết kiệm thời gian của qu&yacute; kh&aacute;ch khi truy cập tại website www.nongsansachvietnam.vn hoặc viếng thăm website www.nongsansachvietnam.vn lần nữa m&agrave; kh&ocirc;ng cần đăng k&yacute; lại th&ocirc;ng tin sẵn c&oacute;.</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;Hầu&nbsp;hết&nbsp;c&aacute;c&nbsp;tr&igrave;nh&nbsp;duyệt&nbsp;web&nbsp;tự&nbsp;động&nbsp;chấp&nbsp;nhận&nbsp;c&aacute;c&nbsp;cookie,&nbsp;nhưng&nbsp;bạn&nbsp;c&oacute;&nbsp;thể&nbsp;thường&nbsp;xuy&ecirc;n&nbsp;thay&nbsp;đổi&nbsp;setting&nbsp;tr&igrave;nh&nbsp;duyệt&nbsp;của&nbsp;bạn&nbsp;để&nbsp;từ&nbsp;chối&nbsp;c&aacute;c&nbsp;cookie&nbsp;nếu&nbsp;bạn</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;muốn.&nbsp;Điều&nbsp;n&agrave;y&nbsp;c&oacute;&nbsp;thể&nbsp;g&acirc;y&nbsp;cản&nbsp;trở&nbsp;đến&nbsp;việc&nbsp;bạn&nbsp;nhận&nbsp;được&nbsp;lợi&nbsp;&iacute;ch&nbsp;tối&nbsp;đa&nbsp;từ&nbsp;website.</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;7) Thay đổi về ch&iacute;nh s&aacute;ch:</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;Ch&uacute;ng t&ocirc;i ho&agrave;n to&agrave;n c&oacute; thể thay đổi nội dung trong trang n&agrave;y m&agrave; kh&ocirc;ng cần phải th&ocirc;ng b&aacute;o trước, để ph&ugrave; hợp với c&aacute;c nhu cầu của www.nongsansachvietnam.vn cũng như nhu cầu v&agrave; sự phản hồi từ kh&aacute;ch h&agrave;ng nếu c&oacute;. Khi cập nhật nội dung ch&iacute;nh s&aacute;ch n&agrave;y, ch&uacute;ng t&ocirc;i sẽ chỉnh sửa lại thời gian &ldquo;Cập nhật lần cuối&rdquo; b&ecirc;n dưới.</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;- Nội dung &ldquo;Ch&iacute;nh s&aacute;ch bảo mật&rdquo; n&agrave;y chỉ &aacute;p dụng tại www.nongsansachvietnam.vn, kh&ocirc;ng bao gồm hoặc li&ecirc;n quan đến c&aacute;c b&ecirc;n thứ ba đặt quảng c&aacute;o hay c&oacute; links tại www.NguyenKim.com. Ch&uacute;ng t&ocirc;i khuyến kh&iacute;ch bạn đọc kỹ ch&iacute;nh s&aacute;ch An to&agrave;n v&agrave; Bảo mật của c&aacute;c trang web của b&ecirc;n thứ ba trước khi cung cấp th&ocirc;ng tin c&aacute; nh&acirc;n cho c&aacute;c trang web đ&oacute;. Ch&uacute;ng t&ocirc;i kh&ocirc;ng chịu tr&aacute;ch nhiệm dưới bất kỳ h&igrave;nh thức n&agrave;o về nội dung v&agrave; t&iacute;nh ph&aacute;p l&yacute; của trang web thuộc b&ecirc;n thứ ba.</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;- V&igrave; vậy, bạn đ&atilde; đồng &yacute; rằng, khi bạn sử dụng website của ch&uacute;ng t&ocirc;i sau khi chỉnh sửa nghĩa l&agrave; bạn đ&atilde; thừa nhận, đồng &yacute; tu&acirc;n thủ cũng như tin tưởng v&agrave;o sự chỉnh sửa n&agrave;y. Do đ&oacute;, ch&uacute;ng t&ocirc;i đề nghị bạn n&ecirc;n xem trước nội dung trang n&agrave;y trước khi truy cập c&aacute;c nội dung kh&aacute;c tr&ecirc;n website cũng như bạn n&ecirc;n đọc v&agrave; tham khảo kỹ nội dung &ldquo;Ch&iacute;nh s&aacute;ch bảo mật&rdquo; của từng website m&agrave; bạn đang truy cập.</p>

<div class="ddict_btn" style="left:1666.25px; top:1094px"><img src="chrome-extension://bpggmmljdiliancllaapiggllnkbjocb/logo/16.png" /></div>',
                'status' => 1,
                'description' => 'ádsđâsđấ',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            [
                'name' => 'Chính sách bảo hành',
                'slug' => 'chinh-sach-bao-hanh',
                'content' => '<p>Ch&iacute;nh s&aacute;ch bảo mật<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />
&nbsp;&nbsp;&nbsp;&nbsp;www.nongsansachvietnam.vn cam kết sẽ bảo mật những th&ocirc;ng tin mang t&iacute;nh ri&ecirc;ng tư của kh&aacute;ch h&agrave;ng. Qu&yacute; kh&aacute;ch vui l&ograve;ng đọc bản &ldquo;Ch&iacute;nh s&aacute;ch bảo mật&rdquo; dưới đ&acirc;y để hiểu hơn những cam kết m&agrave; ch&uacute;ng t&ocirc;i thực hiện, nhằm t&ocirc;n trọng v&agrave; bảo vệ quyền lợi của người truy cập:</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;1)Mục&nbsp;đ&iacute;ch&nbsp;thu thập th&ocirc;ng tin c&aacute; nh&acirc;n:</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;Để c&oacute; thể tiến h&agrave;nh mua h&agrave;ng tại www.nongsansachvietnam.vn qu&yacute; kh&aacute;ch c&oacute; thể sẽ được y&ecirc;u cầu đăng k&yacute; với ch&uacute;ng t&ocirc;i th&ocirc;ng tin c&aacute; nh&acirc;n (Email, Họ t&ecirc;n, Số ĐT li&ecirc;n lạc&hellip;). Mọi th&ocirc;ng tin khai b&aacute;o phải đảm bảo t&iacute;nh ch&iacute;nh x&aacute;c v&agrave; hợp ph&aacute;p. www.nongsansachvietnam.vn kh&ocirc;ng chịu mọi tr&aacute;ch nhiệm li&ecirc;n quan đến ph&aacute;p luật của th&ocirc;ng tin khai b&aacute;o. Ch&uacute;ng t&ocirc;i c&oacute; thể sử dụng th&ocirc;ng tin c&aacute; nh&acirc;n của qu&yacute; kh&aacute;ch để thực hiện c&aacute;c c&ocirc;ng việc như sau:</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;Giao&nbsp;h&agrave;ng&nbsp;theo&nbsp;địa&nbsp;chỉ&nbsp;m&agrave;&nbsp;qu&yacute;&nbsp;kh&aacute;ch&nbsp;đ&atilde;&nbsp;cung&nbsp;cấp;</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;Cung&nbsp;cấp&nbsp;th&ocirc;ng&nbsp;tin&nbsp;li&ecirc;n&nbsp;quan&nbsp;đến&nbsp;sản&nbsp;phẩm,&nbsp;lợi&nbsp;&iacute;ch,&nbsp;ưu&nbsp;đ&atilde;i&nbsp;hay&nbsp;c&aacute;c&nbsp;thư&nbsp;từ&nbsp;kh&aacute;c.</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;2) Phạm&nbsp;vi&nbsp;thu&nbsp;thập&nbsp;th&ocirc;ng&nbsp;tin:</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;Ch&uacute;ng&nbsp;t&ocirc;i&nbsp;c&oacute;&nbsp;thể&nbsp;thu&nbsp;thập c&aacute;c th&ocirc;ng tin sau: T&ecirc;n,&nbsp;điện&nbsp;thoại,&nbsp;địa&nbsp;chỉ,&nbsp;email,&nbsp;khi&nbsp;bạn&nbsp;c&oacute;&nbsp;nhu&nbsp;cầu&nbsp;đặt&nbsp;h&agrave;ng&nbsp;với&nbsp;ch&uacute;ng&nbsp;t&ocirc;i&nbsp;vv&hellip;</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;3) Phạm vi sử dụng th&ocirc;ng tin:</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;Ch&uacute;ng t&ocirc;i chỉ sử dụng th&ocirc;ng tin của bạn để tiến h&agrave;nh giao h&agrave;ng theo đơn h&agrave;ng bạn đ&atilde; thực hiện. Khi cần thiết, ch&uacute;ng t&ocirc;i c&oacute; thể sử dụng những th&ocirc;ng tin n&agrave;y để li&ecirc;n hệ trực tiếp với bạn dưới c&aacute;c h&igrave;nh thức như: gởi thư ngỏ, đơn đặt h&agrave;ng, thư cảm ơn, th&ocirc;ng tin về sản phẩm v&agrave; ch&iacute;nh s&aacute;ch bảo mật của ch&uacute;ng t&ocirc;i.</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;4) Cam kết sử dụng th&ocirc;ng tin:</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;Ch&uacute;ng&nbsp;t&ocirc;i&nbsp;sẽ&nbsp;kh&ocirc;ng&nbsp;b&aacute;n,&nbsp;ph&acirc;n&nbsp;phối&nbsp;hoặc&nbsp;cho&nbsp;thu&ecirc;&nbsp;những&nbsp;th&ocirc;ng&nbsp;tin&nbsp;c&aacute;&nbsp;nh&acirc;n&nbsp;của&nbsp;bạn&nbsp;đến&nbsp;bất&nbsp;kỳ&nbsp;b&ecirc;n&nbsp;thứ&nbsp;ba&nbsp;n&agrave;o&nbsp;kh&aacute;c&nbsp;trừ&nbsp;phi&nbsp;bạn&nbsp;cho&nbsp;ph&eacute;p hoặc&nbsp;được&nbsp;y&ecirc;u&nbsp;cầu&nbsp;theo luật&nbsp;định.</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;Nếu&nbsp;bạn&nbsp;cho&nbsp;rằng&nbsp;th&ocirc;ng&nbsp;tin&nbsp;về&nbsp;bạn&nbsp;m&agrave;&nbsp;ch&uacute;ng&nbsp;t&ocirc;i&nbsp;đang&nbsp;nắm&nbsp;giữ&nbsp;c&oacute;&nbsp;phần&nbsp;n&agrave;o&nbsp;kh&ocirc;ng&nbsp;ch&iacute;nh&nbsp;x&aacute;c&nbsp;hoặc&nbsp;chưa&nbsp;đầy&nbsp;đủ,&nbsp;</p>

<p>xin&nbsp;vui&nbsp;l&ograve;ng&nbsp;gửi&nbsp;th&ocirc;ng&nbsp;b&aacute;o&nbsp;bằng&nbsp;văn&nbsp;bản&nbsp;hoặc&nbsp;email&nbsp;cho&nbsp;ch&uacute;ng&nbsp;t&ocirc;i&nbsp;c&agrave;ng&nbsp;sớm&nbsp;c&agrave;ng&nbsp;tốt&nbsp;theo&nbsp;địa&nbsp;chỉ&nbsp;ở dưới, ch&uacute;ng&nbsp;t&ocirc;i&nbsp;sẽ&nbsp;hiệu&nbsp;chỉnh&nbsp;ngay&nbsp;mọi&nbsp;th&ocirc;ng&nbsp;tin&nbsp;chưa&nbsp;ch&iacute;nh&nbsp;x&aacute;c.</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;5) Cam&nbsp;kết&nbsp;bảo&nbsp;mật&nbsp;th&ocirc;ng&nbsp;tin:<br />
&nbsp;&nbsp;&nbsp;&nbsp;Ch&uacute;ng&nbsp;t&ocirc;i&nbsp;cam&nbsp;kết&nbsp;rằng&nbsp;những&nbsp;th&ocirc;ng&nbsp;tin&nbsp;của&nbsp;bạn&nbsp;được&nbsp;bảo&nbsp;mật.&nbsp;Để&nbsp;bảo&nbsp;vệ&nbsp;dữ&nbsp;liệu&nbsp;c&aacute;&nbsp;nh&acirc;n&nbsp;m&agrave;&nbsp;bạn&nbsp;đ&atilde;&nbsp;cungcấp&nbsp;cho&nbsp;ch&uacute;ng&nbsp;t&ocirc;i,&nbsp;ch&uacute;ng&nbsp;t&ocirc;i&nbsp;đ&atilde;&nbsp;thực&nbsp;hiện&nbsp;v&agrave;&nbsp;sử&nbsp;dụng&nbsp;</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;c&aacute;c&nbsp;hệ&nbsp;thống&nbsp;v&agrave;&nbsp;quy&nbsp;tr&igrave;nh&nbsp;quản&nbsp;l&yacute;&nbsp;ph&ugrave;&nbsp;hợp.</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;Chỉ&nbsp;những&nbsp;nh&acirc;n&nbsp;vi&ecirc;n&nbsp;được&nbsp;ủy&nbsp;nhiệm&nbsp;mới&nbsp;được&nbsp;ph&eacute;p&nbsp;truy&nbsp;cập&nbsp;những&nbsp;th&ocirc;ng&nbsp;tin&nbsp;c&aacute;&nbsp;nh&acirc;n&nbsp;để&nbsp;thực&nbsp;hiện&nbsp;nhiệm&nbsp;vụ&nbsp;của&nbsp;họ&nbsp;đối&nbsp;với&nbsp;c&aacute;c&nbsp;sản&nbsp;phẩm&nbsp;của&nbsp;ch&uacute;ng&nbsp;t&ocirc;i.</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;6) Cookie:</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;www.nongsansachvietnam.vn d&ugrave;ng &quot;Cookie&quot; để gi&uacute;p c&aacute; nh&acirc;n h&oacute;a v&agrave; n&acirc;ng cao tối đa hiệu quả sử dụng thời gian trực tuyến của qu&yacute; kh&aacute;ch.</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;- Một cookie l&agrave; một file văn bản được đặt tr&ecirc;n đĩa cứng của bạn bởi một m&aacute;y chủ của trang web. Cookie kh&ocirc;ng được d&ugrave;ng để chạy chương tr&igrave;nh hay đưa virus v&agrave;o m&aacute;y t&iacute;nh của qu&yacute; kh&aacute;ch. Cookie được chỉ định v&agrave;o m&aacute;y t&iacute;nh của qu&yacute; kh&aacute;ch v&agrave; chỉ c&oacute; thể được đọc bởi một m&aacute;y chủ trang web tr&ecirc;n miền được đưa ra cookie cho qu&yacute; kh&aacute;ch.</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;- Một trong những mục đ&iacute;ch của Cookie l&agrave; cung cấp những tiện &iacute;ch để tiết kiệm thời gian của qu&yacute; kh&aacute;ch khi truy cập tại website www.nongsansachvietnam.vn hoặc viếng thăm website www.nongsansachvietnam.vn lần nữa m&agrave; kh&ocirc;ng cần đăng k&yacute; lại th&ocirc;ng tin sẵn c&oacute;.</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;Hầu&nbsp;hết&nbsp;c&aacute;c&nbsp;tr&igrave;nh&nbsp;duyệt&nbsp;web&nbsp;tự&nbsp;động&nbsp;chấp&nbsp;nhận&nbsp;c&aacute;c&nbsp;cookie,&nbsp;nhưng&nbsp;bạn&nbsp;c&oacute;&nbsp;thể&nbsp;thường&nbsp;xuy&ecirc;n&nbsp;thay&nbsp;đổi&nbsp;setting&nbsp;tr&igrave;nh&nbsp;duyệt&nbsp;của&nbsp;bạn&nbsp;để&nbsp;từ&nbsp;chối&nbsp;c&aacute;c&nbsp;cookie&nbsp;nếu&nbsp;bạn</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;muốn.&nbsp;Điều&nbsp;n&agrave;y&nbsp;c&oacute;&nbsp;thể&nbsp;g&acirc;y&nbsp;cản&nbsp;trở&nbsp;đến&nbsp;việc&nbsp;bạn&nbsp;nhận&nbsp;được&nbsp;lợi&nbsp;&iacute;ch&nbsp;tối&nbsp;đa&nbsp;từ&nbsp;website.</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;7) Thay đổi về ch&iacute;nh s&aacute;ch:</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;Ch&uacute;ng t&ocirc;i ho&agrave;n to&agrave;n c&oacute; thể thay đổi nội dung trong trang n&agrave;y m&agrave; kh&ocirc;ng cần phải th&ocirc;ng b&aacute;o trước, để ph&ugrave; hợp với c&aacute;c nhu cầu của www.nongsansachvietnam.vn cũng như nhu cầu v&agrave; sự phản hồi từ kh&aacute;ch h&agrave;ng nếu c&oacute;. Khi cập nhật nội dung ch&iacute;nh s&aacute;ch n&agrave;y, ch&uacute;ng t&ocirc;i sẽ chỉnh sửa lại thời gian &ldquo;Cập nhật lần cuối&rdquo; b&ecirc;n dưới.</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;- Nội dung &ldquo;Ch&iacute;nh s&aacute;ch bảo mật&rdquo; n&agrave;y chỉ &aacute;p dụng tại www.nongsansachvietnam.vn, kh&ocirc;ng bao gồm hoặc li&ecirc;n quan đến c&aacute;c b&ecirc;n thứ ba đặt quảng c&aacute;o hay c&oacute; links tại www.NguyenKim.com. Ch&uacute;ng t&ocirc;i khuyến kh&iacute;ch bạn đọc kỹ ch&iacute;nh s&aacute;ch An to&agrave;n v&agrave; Bảo mật của c&aacute;c trang web của b&ecirc;n thứ ba trước khi cung cấp th&ocirc;ng tin c&aacute; nh&acirc;n cho c&aacute;c trang web đ&oacute;. Ch&uacute;ng t&ocirc;i kh&ocirc;ng chịu tr&aacute;ch nhiệm dưới bất kỳ h&igrave;nh thức n&agrave;o về nội dung v&agrave; t&iacute;nh ph&aacute;p l&yacute; của trang web thuộc b&ecirc;n thứ ba.</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;- V&igrave; vậy, bạn đ&atilde; đồng &yacute; rằng, khi bạn sử dụng website của ch&uacute;ng t&ocirc;i sau khi chỉnh sửa nghĩa l&agrave; bạn đ&atilde; thừa nhận, đồng &yacute; tu&acirc;n thủ cũng như tin tưởng v&agrave;o sự chỉnh sửa n&agrave;y. Do đ&oacute;, ch&uacute;ng t&ocirc;i đề nghị bạn n&ecirc;n xem trước nội dung trang n&agrave;y trước khi truy cập c&aacute;c nội dung kh&aacute;c tr&ecirc;n website cũng như bạn n&ecirc;n đọc v&agrave; tham khảo kỹ nội dung &ldquo;Ch&iacute;nh s&aacute;ch bảo mật&rdquo; của từng website m&agrave; bạn đang truy cập.</p>

<div class="ddict_btn" style="left:1666.25px; top:1094px"><img src="chrome-extension://bpggmmljdiliancllaapiggllnkbjocb/logo/16.png" /></div>',
                'status' => 1,
                'description' => 'ádsđâsđấ',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ]
        ];
    }
}
