package com.lxtx.util;

import java.security.MessageDigest;
import java.security.NoSuchAlgorithmException;
import java.security.NoSuchProviderException;
import java.security.Security;
import java.text.ParseException;
import java.text.SimpleDateFormat;
import java.util.Calendar;
import java.util.Date;

import org.apache.commons.codec.binary.Hex;
import org.apache.commons.lang.RandomStringUtils;
import org.bouncycastle.jce.provider.BouncyCastleProvider;

public class StringUtil {
	/**
	 * generate a random number, width is given as param
	 * 
	 * @param cnt
	 * @return
	 */
	public static String generateRandomNumber(int cnt) {
		return RandomStringUtils.randomNumeric(cnt);
	}

	/**
	 * Get the digest value , using bouncy castle package
	 * 
	 * @param raw
	 * @return
	 */
	public static String getDigestVal(String raw) {
		Security.addProvider(new BouncyCastleProvider());
		MessageDigest mda;
		try {
			mda = MessageDigest.getInstance("SHA-512", "BC");
			byte[] digesta = mda.digest(raw.getBytes());
			return new String(Hex.encodeHex(digesta));
		} catch (NoSuchAlgorithmException e) {
			e.printStackTrace();
		} catch (NoSuchProviderException e) {
			e.printStackTrace();
		}
		return null;
	}

	/**
	 * 
	 * @param date
	 * @param formatter
	 * @param offset
	 *            例如：-1表示前一天 1表示后一天 0表示当前
	 * @return
	 */
	public static String formatDateCommon(Date date, String formatter, int offset) {
		Date resultDate = new Date(date.getTime() + (offset * 1000 * 60 * 60 * 24));
		SimpleDateFormat sdf = new SimpleDateFormat(formatter);

		return sdf.format(resultDate);

	}

	public static String getPreDay(Date dNow) {
		Calendar calendar = Calendar.getInstance(); // 得到日历
		calendar.setTime(dNow);// 把当前时间赋给日历

		calendar.add(Calendar.DATE, -1); // 设置为前一天
		dNow = calendar.getTime(); // 得到前一天的时间
		return formatDate(dNow, "yyyy-MM-dd");
	}

	public static String formatDate(Date date) {
		SimpleDateFormat sdf = new SimpleDateFormat("yyyy-MM-dd HH:mm:ss");
		if (date != null) {
			return sdf.format(date);
		}
		return null;
	}

	public static Date parseStringToDate(String date) {
		SimpleDateFormat sdf = new SimpleDateFormat("yyyy-MM-dd HH:mm:ss");
		if (date != null) {
			try {
				return sdf.parse(date);
			} catch (Exception e) {
				e.printStackTrace();
			}
		}
		return null;
	}

	public static Date parseStringToDate10(String date) {
		SimpleDateFormat sdf = new SimpleDateFormat("yyyy-MM-dd");
		if (date != null) {
			try {
				return sdf.parse(date);
			} catch (ParseException e) {
				return null;
			}
		}
		return null;
	}

	public static String stringFormat(String date, String format) {
		SimpleDateFormat formatter = new SimpleDateFormat(format);
		String result;
		try {
			result = formatter.format(parseStringToDate(date));
			return result;
		} catch (Exception e) {
			e.printStackTrace();
		}
		return null;
	}

	public static String formatDate(Date date, String pattern) {
		SimpleDateFormat sdf = new SimpleDateFormat(pattern);
		if (date != null) {
			return sdf.format(date);
		}
		return null;
	}

	public static Integer formatDate() {
		Date date = new Date();
		SimpleDateFormat sdf = new SimpleDateFormat("yyyyMMdd");
		return Integer.parseInt(sdf.format(date));
	}

	/**
	 * 获取当前时间的半小时时间
	 * 
	 * @param date
	 * @return
	 */
	public static String getPreHalfHour(Date date) {
		long l = date.getTime() - 30 * 60 * 1000l;
		Calendar c = Calendar.getInstance();
		c.setTimeInMillis(l);
		return formatDate(c.getTime(), "yyyy-MM-dd HH:mm:00");
	}

	/**
	 * 
	 * @param date
	 * @param formatter
	 * @param offset
	 *            例如：-1表示前一小时 1表示后一小时 0表示当前
	 * @return
	 */
	public static String getPreHour(Date date, int offset) {
		long l = date.getTime() + offset * 60 * 60 * 1000l;
		Calendar c = Calendar.getInstance();
		c.setTimeInMillis(l);
		return formatDate(c.getTime(), "yyyy-MM-dd HH:mm:00");
	}
	
}
