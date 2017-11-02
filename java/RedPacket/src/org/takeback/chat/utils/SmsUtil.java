// 
// Decompiled by Procyon v0.5.30
// 

package org.takeback.chat.utils;

import java.net.URLEncoder;
import java.security.NoSuchAlgorithmException;
import java.util.Date;
import java.util.HashMap;
import java.util.Map;

import java.security.MessageDigest;
import java.io.InputStream;
import java.io.Reader;
import java.io.BufferedReader;
import java.io.InputStreamReader;
import java.net.HttpURLConnection;
import java.net.URL;

public class SmsUtil
{
    static String httpUrl;
    static String testUsername;
    static String testPassword;
    static String sign;
    
    public static void main(final String[] args) {
        send("13625974105", "听闻,安溪有个姓李的2XD!");
    }
    
    public static boolean send(final String phone, final String content) {
        final StringBuffer httpArg = new StringBuffer();
        httpArg.append("u=").append(SmsUtil.testUsername).append("&");
        httpArg.append("p=").append(md5(SmsUtil.testPassword)).append("&");
        httpArg.append("m=").append(phone).append("&");
        httpArg.append("c=").append(encodeUrlString(content, "UTF-8")).append(encodeUrlString(SmsUtil.sign, "UTF-8"));
        final String result = request(SmsUtil.httpUrl, httpArg.toString());
        return "0".equals(result);
    }
    
    public static String sendMsg(String mobile,String validCode){
		Map<String, String> map = new HashMap<String, String>();
		map.put("mobiles", mobile);
		map.put("content", "【九州红包】尊敬的用户：您好，您的本次验证码是"+validCode+"，请不要告诉任何人，感谢使用。");
		map.put("secret", "beijing");
		map.put("time", ""+new Date().getTime());
		String res = HttpClient.post("http://m.ninestate.com.cn/index.php/mobile/async/sendSMSMsg", map);
		res = res.replaceAll("\"", "");
		res = res.substring(2, res.length()-1);
		String[] s  = res.split(",");
		return s[0];
	}
    
    public static String request(String httpUrl, final String httpArg) {
        BufferedReader reader = null;
        String result = null;
        final StringBuffer sbf = new StringBuffer();
        httpUrl = httpUrl + "?" + httpArg;
        try {
            final URL url = new URL(httpUrl);
            final HttpURLConnection connection = (HttpURLConnection)url.openConnection();
            connection.setRequestMethod("GET");
            connection.connect();
            final InputStream is = connection.getInputStream();
            reader = new BufferedReader(new InputStreamReader(is, "UTF-8"));
            String strRead = reader.readLine();
            if (strRead != null) {
                sbf.append(strRead);
                while ((strRead = reader.readLine()) != null) {
                    sbf.append("\n");
                    sbf.append(strRead);
                }
            }
            reader.close();
            result = sbf.toString();
        }
        catch (Exception e) {
            e.printStackTrace();
        }
        return result;
    }
    
    public static String md5(final String plainText) {
        StringBuffer buf = null;
        try {
            final MessageDigest md = MessageDigest.getInstance("MD5");
            md.update(plainText.getBytes());
            final byte[] b = md.digest();
            buf = new StringBuffer("");
            for (int offset = 0; offset < b.length; ++offset) {
                int i = b[offset];
                if (i < 0) {
                    i += 256;
                }
                if (i < 16) {
                    buf.append("0");
                }
                buf.append(Integer.toHexString(i));
            }
        }
        catch (NoSuchAlgorithmException e) {
            e.printStackTrace();
        }
        return buf.toString();
    }
    
    public static String encodeUrlString(final String str, final String charset) {
        String strret = null;
        if (str == null) {
            return str;
        }
        try {
            strret = URLEncoder.encode(str, charset);
        }
        catch (Exception e) {
            e.printStackTrace();
            return null;
        }
        return strret;
    }
    
    static {
        SmsUtil.httpUrl = "http://api.smsbao.com/sms";
        SmsUtil.testUsername = "test02";
        SmsUtil.testPassword = "test02";
        SmsUtil.sign = "【疯狂的红包】";
    }
}
