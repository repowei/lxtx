package com.lxtx.util.tencent;

import java.io.IOException;
import java.util.Properties;

public class WXPayConfig {
  private Properties properties;
  
  private static WXPayConfig config = null;
  
  private WXPayConfig() {
    this.properties = new Properties();
    try {
      properties.load(WXPayConfig.class.getResourceAsStream("/config/pay.properties"));
    } catch (IOException e) {
      e.printStackTrace();
    }
  }
  
  public static WXPayConfig getInstance() {
    if (config == null) {
      config = new WXPayConfig();
    }
    return config;
  }
  
  public static String get(String property) {
    return WXPayConfig.getInstance().properties.getProperty(property);
  }

  public static void main(String[] args) {
    String merchantId = WXPayConfig.getInstance().get("pay.mch_id");
    System.out.println(merchantId);
  }
  
}
