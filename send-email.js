const mailgun = require("mailgun-js");

const DOMAIN = process.env.MAILGUN_DOMAIN;
const mg = mailgun({ apiKey: process.env.MAILGUN_API_KEY, domain: DOMAIN });

exports.handler = async (event, context) => {
  const data = JSON.parse(event.body);
  const email = data.email;
  const message = {
    from: "noreply@gmail.com",
    to: email,
    subject: "エントリーフォームの確認",
    text: `送信が完了しました。以下確認用の記入内容です。\n\n
           学校名: ${data.school}\n
           記入者氏名: ${data.name}\n\n
           出場選手エントリー内容:\n
           - 男子シングルス1部: ${data.player11},${data.kana11},${data.grade11}\n
           - 男子ダブルス: ${data.player21},${data.kana21},${data.grade21},${data.player22},${data.kana22},${data.grade22}\n
           - 男子シングルス2部: ${data.player31},${data.kana31},${data.grade31}\n
           - 女子シングルス1部: ${data.player41},${data.kana41},${data.grade41}\n
           - 女子ダブルス: ${data.player51},${data.kana51},${data.grade51}\n
           - 女子シングルス2部: ${data.player61},${data.kana61},${data.grade61}\n\n
           上記内容をご確認ください。`
  };

  try {
    const result = await mg.messages().send(message);
    return {
      statusCode: 200,
      body: JSON.stringify({ message: "メールが送信されました。" }),
    };
  } catch (error) {
    return {
      statusCode: 500,
      body: JSON.stringify({ error: error.message }),
    };
  }
};
